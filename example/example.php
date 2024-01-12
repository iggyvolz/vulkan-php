<?php

use FFI\CData;
use iggyvolz\vulkan\enum\VkColorSpaceKHR;
use iggyvolz\vulkan\enum\VkComponentSwizzle;
use iggyvolz\vulkan\enum\VkCompositeAlphaFlagBitsKHR;
use iggyvolz\vulkan\enum\VkFormat;
use iggyvolz\vulkan\enum\VkImageAspectFlagBits;
use iggyvolz\vulkan\enum\VkImageUsageFlagBits;
use iggyvolz\vulkan\enum\VkImageViewType;
use iggyvolz\vulkan\enum\VkPresentModeKHR;
use iggyvolz\vulkan\enum\VkQueueFlagBits;
use iggyvolz\vulkan\enum\VkShaderStageFlagBits;
use iggyvolz\vulkan\enum\VkSharingMode;
use iggyvolz\vulkan\enum\VkStructureType;
use iggyvolz\vulkan\struct\VkApplicationInfo;
use iggyvolz\vulkan\struct\VkComponentMapping;
use iggyvolz\vulkan\struct\VkDevice;
use iggyvolz\vulkan\struct\VkDeviceCreateInfo;
use iggyvolz\vulkan\struct\VkDeviceQueueCreateInfo;
use iggyvolz\vulkan\struct\VkExtensionProperties;
use iggyvolz\vulkan\struct\VkImage;
use iggyvolz\vulkan\struct\VkImageSubresourceRange;
use iggyvolz\vulkan\struct\VkImageView;
use iggyvolz\vulkan\struct\VkImageViewCreateInfo;
use iggyvolz\vulkan\struct\VkInstance;
use iggyvolz\vulkan\struct\VkInstanceCreateInfo;
use iggyvolz\vulkan\struct\VkLayerProperties;
use iggyvolz\vulkan\struct\VkPhysicalDevice;
use iggyvolz\vulkan\struct\VkPhysicalDeviceFeatures;
use iggyvolz\vulkan\struct\VkPhysicalDeviceProperties;
use iggyvolz\vulkan\struct\VkPipelineShaderStageCreateInfo;
use iggyvolz\vulkan\struct\VkQueue;
use iggyvolz\vulkan\struct\VkQueueFamilyProperties;
use iggyvolz\vulkan\struct\VkShaderModule;
use iggyvolz\vulkan\struct\VkShaderModuleCreateInfo;
use iggyvolz\vulkan\struct\VkSurfaceCapabilitiesKHR;
use iggyvolz\vulkan\struct\VkSurfaceFormatKHR;
use iggyvolz\vulkan\struct\VkSurfaceKHR;
use iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR;
use iggyvolz\vulkan\struct\VkSwapchainKHR;
use iggyvolz\vulkan\struct\VkWin32SurfaceCreateInfoKHR;
use iggyvolz\vulkan\struct\VkXlibSurfaceCreateInfoKHR;
use iggyvolz\vulkan\util\IntPointer;
use iggyvolz\vulkan\util\ObjectPointer;
use iggyvolz\vulkan\util\OpaquePointer;
use iggyvolz\vulkan\util\Pointer;
use iggyvolz\vulkan\util\Version;
use iggyvolz\vulkan\Vulkan;
use iggyvolz\windows\Window;
use iggyvolz\x11\gen\X11;
use iggyvolz\x11\gen\XEventPtr;
use Revolt\EventLoop;

require_once __DIR__ . "/../vendor/autoload.php";
$vulkan = new Vulkan();
echo $vulkan->systemVersion . PHP_EOL;
echo json_encode($availableLayers = $vulkan->getInstanceLayerProperties(), JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT) . PHP_EOL;
echo json_encode($availableExtensions = $vulkan->getInstanceExtensionProperties(null), JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT) . PHP_EOL;
$availableLayerNames = array_map(fn(VkLayerProperties $layerProperties): string => $layerProperties->getLayerName(), $availableLayers);
$availableExtensionNames = array_map(fn(VkExtensionProperties $extensionProperties): string => $extensionProperties->getExtensionName(), $availableExtensions);
function stringsToDoubleCharPointer(string ...$data): Pointer
{
    global $vulkan;
    if(empty($data)) return OpaquePointer::null($vulkan);
    $cdataArr = array_map(function (string $s) use($vulkan): CData {
        // todo don't leak memory like a motherfucker (my brain hurts from the pointer math, I'll clean this up later)
        $cdata = $vulkan->ffi->new("char[" . strlen($s) + 1 . "]", owned: false);
        FFI::memcpy($cdata, "$s\0", strlen($s) + 1);
        return $cdata;
    }, $data);
    $cdata = $vulkan->ffi->new("char*[" . count($data) . "]", owned: false);
    for($i = 0; $i < count($data); $i++) {
        $cdata[$i] = $cdataArr[$i];
    }
    return new OpaquePointer(FFI::addr($cdata[0]), $vulkan);
}
$enabledLayers = [];
if(in_array("VK_LAYER_KHRONOS_validation", $availableLayerNames)) {
    $enabledLayers[] = "VK_LAYER_KHRONOS_validation";
}
$enabledExtensions = ["VK_KHR_surface"];
$enabledExtensions = array_merge($enabledExtensions, match(PHP_OS_FAMILY) {
    "Windows" => ["VK_KHR_win32_surface"],
    "Linux" => ["VK_KHR_display", "VK_KHR_xlib_surface"],
    default => throw new RuntimeException("Not sure how to handle platform"),
});
foreach ($enabledExtensions as $extension) {
    if(!in_array($extension, $availableExtensionNames)) {
        throw new RuntimeException("Missing extension $extension.  Get a better graphics card or install requisite packages!");
    }
}
$vulkan->createInstance(ObjectPointer::of(VkInstanceCreateInfo::create($vulkan,
    sType: VkStructureType::InstanceCreateInfo,
    pApplicationInfo: ObjectPointer::of(VkApplicationInfo::create($vulkan,
        sType: VkStructureType::ApplicationInfo,
//        pApplicationName: "My Application",
        applicationVersion: (new Version(0, 1))->toInt(),
//        pEngineName: "My Engine",
        engineVersion: (new Version(0, 1))->toInt(),
        apiVersion: $vulkan->systemVersion->toInt()
    )),
    enabledLayerCount: count($enabledLayers),
    ppEnabledLayerNames: stringsToDoubleCharPointer(...$enabledLayers),
    enabledExtensionCount: count($enabledExtensions),
    ppEnabledExtensionNames: stringsToDoubleCharPointer(...$enabledExtensions),
)), ObjectPointer::null($vulkan), $pInstance = ObjectPointer::new($vulkan, VkInstance::class))->assert();
/** @var VkInstance $instance */
$instance = $pInstance->get();
echo json_encode($instance);
$physicalDevices = $instance->getPhysicalDevices();

// go with physical device 0 out of laziness
$physicalDevice = $physicalDevices[0];
// also go with queue family zero out of laziness
$queueFamily = 0;

$queuePriority = $vulkan->ffi->new("float");
$queuePriority->cdata = 1.0;

$queueCreateInfo = VkDeviceQueueCreateInfo::create($vulkan,
    sType: VkStructureType::DeviceQueueCreateInfo,
    queueFamilyIndex: $queueFamily,
    queueCount: 1,
    pQueuePriorities: new OpaquePointer(FFI::addr($queuePriority), $vulkan, $queuePriority)
);

$physicalDeviceFeatures = VkPhysicalDeviceFeatures::create($vulkan
);
$deviceCreateInfo = VkDeviceCreateInfo::create($vulkan,
    sType: VkStructureType::DeviceCreateInfo,
    queueCreateInfoCount: 1,
    pQueueCreateInfos: ObjectPointer::of($queueCreateInfo),
    enabledExtensionCount: 1,
    ppEnabledExtensionNames: stringsToDoubleCharPointer("VK_KHR_swapchain"),
    pEnabledFeatures: ObjectPointer::of($physicalDeviceFeatures)
);

$physicalDevice->createDevice(ObjectPointer::of($deviceCreateInfo), ObjectPointer::null($vulkan), $pDevice = ObjectPointer::new($vulkan, VkDevice::class))->assert();
/** @var VkDevice $device */
$device = $pDevice->get();
$queue = $vulkan->get("vkGetDeviceQueue", VkQueue::class, $device, $queueFamily, 0);


if(PHP_OS_FAMILY === "Windows") {
    $window = Window::create("My Window");

    // who the hell decided to make HWND an integer (oops it was me teehee)
    $hwnd = FFI::new("uint64_t");
    $hwnd->cdata = $window->hwnd;

    $surfaceCreateInfo = VkWin32SurfaceCreateInfoKHR::create($vulkan,
        sType: VkStructureType::Win32SurfaceCreateInfoKhr,
        hinstance: ObjectPointer::null(),
        hwnd: new OpaquePointer(FFI::cast("void*", $hwnd)),
    );
    $surface = $vulkan->get("vkCreateWin32SurfaceKHR", VkSurfaceKHR::class, $vulkan->instance, ObjectPointer::of($surfaceCreateInfo), ObjectPointer::null());
} elseif(PHP_OS_FAMILY === "Linux") {
    $x = X11::init();
    $display = $x->XOpenDisplay(null);
    assert(!is_null($display));
    $screen = $display[0]->getScreens()[$display[0]->getDefaultScreen()];
    $window = $x->XCreateSimpleWindow($display, $screen->getRoot(), 10, 10, 960, 540, 1, $screen->getBlackPixel(), $screen->getWhitePixel());
    $x->XStoreName($display, $window, "foo");
    $x->XSelectInput($display, $window, (1 << 0) || (1 << 1));
    $x->XMapWindow($display, $window);

    // Create surface

    $surfaceCreateInfo = VkXlibSurfaceCreateInfoKHR::create($vulkan,
        sType: VkStructureType::XlibSurfaceCreateInfoKhr,
        dpy: new OpaquePointer($display->cdata),
        window: $window,
    );

    $surface = $vulkan->get("vkCreateXlibSurfaceKHR", VkSurfaceKHR::class, $vulkan->instance, ObjectPointer::of($surfaceCreateInfo), ObjectPointer::null());

    EventLoop::repeat(0, function(string $callback) use($x, $display){
        $event = $x->newXEvent();
        /** @var XEventPtr $eventPtr */
        $eventPtr = $event->ptr();
        $x->XNextEvent($display, $eventPtr);
        if ($event->getType() === 2) {
            $keyEvent = $event->getXkey();
            $keycode = $keyEvent->getKeycode();
            if ($keycode === 9) {
                $x->XCloseDisplay($display);
                EventLoop::cancel($callback);
            }
        }
    });
} else {
    throw new RuntimeException("Unknown platform");
}
$surfaceCapabilities = $vulkan->get("vkGetPhysicalDeviceSurfaceCapabilitiesKHR", VkSurfaceCapabilitiesKHR::class, $physicalDevice, $surface);
$formats = $vulkan->enum("vkGetPhysicalDeviceSurfaceFormatsKHR", VkSurfaceFormatKHR::class, $physicalDevice, $surface);
usort($formats, function(VkSurfaceFormatKHR $a, VkSurfaceFormatKHR $b): int {
    if($a->getFormat() === VkFormat::B8g8r8a8Srgb && $a->getColorSpace() === VkColorSpaceKHR::SrgbNonlinear) {
        return -1;
    }
    if($b->getFormat() === VkFormat::B8g8r8a8Srgb && $b->getColorSpace() === VkColorSpaceKHR::SrgbNonlinear) {
        return 1;
    }
    return 0;
});
$format = $formats[0];
$presentModes = $vulkan->enum("vkGetPhysicalDeviceSurfacePresentModesKHR", VkPresentModeKHR::class, $physicalDevice, $surface);
usort($presentModes, function(VkPresentModeKHR $a, VkPresentModeKHR $b): int {
    if($a === VkPresentModeKHR::Mailbox) {
        return -1;
    }
    if($b === VkPresentModeKHR::Mailbox) {
        return 1;
    }
    return 0;
});
$presentMode = $presentModes[0];

$imageCount = $surfaceCapabilities->getMinImageCount() + 1;
if($surfaceCapabilities->getMaxImageCount() > 0) {
    $imageCount = max($surfaceCapabilities->getMaxImageCount(), $imageCount);
}

$swapChainCreateInfo = VkSwapchainCreateInfoKHR::create($vulkan,
    sType: VkStructureType::SwapchainCreateInfoKhr,
    surface: $surface,
    minImageCount: $imageCount,
    imageFormat: $format->getFormat(),
    imageColorSpace: $format->getColorSpace(),
    imageExtent: $surfaceCapabilities->getCurrentExtent(),
    imageArrayLayers: 1,
    imageUsage: [VkImageUsageFlagBits::ColorAttachment],
    imageSharingMode: VkSharingMode::Exclusive,
    preTransform: $surfaceCapabilities->getCurrentTransform(),
    compositeAlpha: VkCompositeAlphaFlagBitsKHR::PreMultiplied, // TODO off by one error
    presentMode: $presentMode,
    clipped: true
);

$swapchain = $vulkan->get("vkCreateSwapchainKHR", VkSwapchainKHR::class, $device, ObjectPointer::of($swapChainCreateInfo), ObjectPointer::null());
$swapchainImages = $vulkan->enum("vkGetSwapchainImagesKHR", VkImage::class, $device, $swapchain);
$swapchainImageViews = array_map(function(VkImage $image) use($format, $vulkan, $device): VkImageView{
    $createInfo = VkImageViewCreateInfo::create($vulkan,
        sType: VkStructureType::ImageViewCreateInfo,
        image: $image,
        viewType: VkImageViewType::_2d,
        format: $format->getFormat(),
        components: VkComponentMapping::create($vulkan,
            r: VkComponentSwizzle::Identity,
            g: VkComponentSwizzle::Identity,
            b: VkComponentSwizzle::Identity,
            a: VkComponentSwizzle::Identity,
        ),
        subresourceRange: VkImageSubresourceRange::create($vulkan,
            aspectMask: [VkImageAspectFlagBits::Depth], // TODO off by one error here, this should be 0 (fuck this is gonna be fun to find)
            baseMipLevel: 0,
            levelCount: 1,
            baseArrayLayer: 0,
            layerCount: 1,
        )
    );
    return $vulkan->get("vkCreateImageView", VkImageView::class, $device, ObjectPointer::of($createInfo), ObjectPointer::null());
}, $swapchainImages);

function createShader(string $code): VkShaderModule
{
    global $vulkan, $device;
    // todo this is absolutely horrific and makes me want to return my bachelor's degree, but it works
    $codePtr = IntPointer::new("uint32_t", $vulkan, strlen($code) / 4);
    foreach(str_split($code, 4) as $i => $chunk) {
        $codePtr->set(unpack("L", $chunk)[1], $i);
    }
    $createInfo = VkShaderModuleCreateInfo::create($vulkan,
        sType: VkStructureType::ShaderModuleCreateInfo,
        codeSize: strlen($code),
        pCode: $codePtr
    );
    return $vulkan->get("vkCreateShaderModule", VkShaderModule::class, $device, ObjectPointer::of($createInfo), ObjectPointer::null());
}
if(!file_exists(__DIR__ . "/vert.spv") || !file_exists(__DIR__ . "/frag.spv")) {
    // TODO compile the shaders if they don't exist
    throw new RuntimeException("Run glslc on the shaders (see https://vulkan-tutorial.com/en/Drawing_a_triangle/Graphics_pipeline_basics/Shader_modules => Compiling the shaders");
}
$vertexShader = createShader(file_get_contents(__DIR__ . "/vert.spv"));
$fragmentShader = createShader(file_get_contents(__DIR__ . "/frag.spv"));

$vertexShaderStageInfo = VkPipelineShaderStageCreateInfo::create($vulkan,
    sType: VkStructureType::PipelineShaderStageCreateInfo,
    stage: VkShaderStageFlagBits::Vertex,
    module: $vertexShader,
    pName: "main"
);
$fragmentShaderStageInfo = VkPipelineShaderStageCreateInfo::create($vulkan,
    sType: VkStructureType::PipelineShaderStageCreateInfo,
    stage: VkShaderStageFlagBits::Fragment,
    module: $fragmentShader,
    pName: "main"
);
$shaderStages = [$vertexShaderStageInfo, $fragmentShaderStageInfo]; // ?
EventLoop::run();
