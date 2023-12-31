<?php

use FFI\CData;
use iggyvolz\vulkan\enum\VkQueueFlagBits;
use iggyvolz\vulkan\enum\VkStructureType;
use iggyvolz\vulkan\struct\VkApplicationInfo;
use iggyvolz\vulkan\struct\VkDevice;
use iggyvolz\vulkan\struct\VkDeviceCreateInfo;
use iggyvolz\vulkan\struct\VkInstance;
use iggyvolz\vulkan\struct\VkInstanceCreateInfo;
use iggyvolz\vulkan\struct\VkLayerProperties;
use iggyvolz\vulkan\struct\VkPhysicalDevice;
use iggyvolz\vulkan\struct\VkPhysicalDeviceFeatures;
use iggyvolz\vulkan\struct\VkPhysicalDeviceProperties;
use iggyvolz\vulkan\struct\VkQueueFamilyProperties;
use iggyvolz\vulkan\util\ObjectPointer;
use iggyvolz\vulkan\util\OpaquePointer;
use iggyvolz\vulkan\util\VulkanVersion;
use iggyvolz\vulkan\Vulkan;
use iggyvolz\x11\gen\X11;
use iggyvolz\x11\gen\XEventPtr;

require_once __DIR__ . "/vendor/autoload.php";
$vulkan = Vulkan::init();

$version = $vulkan->getVersion();
$extensions = $vulkan->getExtensions();

function printEntry(?string $name, array $properties): string
{
    return (is_null($name) ? "" : "$name (") . implode(", ",
        array_map(fn(string $value, string $key) => "$key: $value", $properties, array_keys($properties))
        ) . (is_null($name) ? "; " : (")" . PHP_EOL));
}

echo "Vulkan $version with " . count($extensions) . " extensions:" . PHP_EOL;
foreach ($extensions as $extension) {
    echo "- " . printEntry($extension->getExtensionName(), [
        "version" => $extension->getSpecVersion(),
        "url" => "https://registry.khronos.org/vulkan/specs/$version->major.$version->minor-extensions/man/html/".$extension->getExtensionName() . ".html"
    ]);
}

echo PHP_EOL;

$layers = ["VK_LAYER_KHRONOS_validation"];
$layersCDataArr = array_map(function (string $s) use($vulkan): \FFI\CData {
    $cdata = $vulkan->ffi->new("char[" . strlen($s) + 1 . "]");
    FFI::memcpy($cdata, "$s\0", strlen($s) + 1);
    return $cdata;
}, $layers);
$layersCData = $vulkan->ffi->new("char*[" . count($layersCDataArr) . "]")[0];
for($i = 0; $i < count($layersCDataArr); $i++) {
    $layersCData[$i] = FFI::addr($layersCDataArr[$i][0]);
}
$createInfo = VkInstanceCreateInfo::create($vulkan,
    sType: VkStructureType::InstanceCreateInfo,
    pApplicationInfo: ObjectPointer::of(VkApplicationInfo::create($vulkan,
        sType: VkStructureType::ApplicationInfo
    )),
    enabledLayerCount: 1,
    ppEnabledLayerNames: new OpaquePointer(FFI::addr($layersCData[0]), null, null),
);
$instanceLayers = $vulkan->enum("vkEnumerateInstanceLayerProperties", VkLayerProperties::class);
echo count($instanceLayers) . " available layers:" . PHP_EOL;
foreach($instanceLayers as $instanceLayer) {
    echo "- " . printEntry($instanceLayer->getLayerName(), [
        "description" => $instanceLayer->getDescription(),
    ]);
}

/** @var VkInstance $instance */
$instance = $vulkan->get("vkCreateInstance", VkInstance::class, ObjectPointer::of($createInfo), ObjectPointer::null());

$physicalDevices = $vulkan->enum("vkEnumeratePhysicalDevices", VkPhysicalDevice::class, $instance);
echo count($physicalDevices) . " devices connected:" . PHP_EOL;
foreach ($physicalDevices as $physicalDevice) {
    /** @var VkPhysicalDeviceProperties $properties */
    $properties = $vulkan->get("vkGetPhysicalDeviceProperties", VkPhysicalDeviceProperties::class, $physicalDevice);

    echo "- " . printEntry($properties->getDeviceName(), [
        "type" => $properties->getDeviceType()->name,
        "device ID" => $properties->getDeviceID(),
        "api version" => VulkanVersion::from($properties->getApiVersion()),
        "driver version" => VulkanVersion::from($properties->getDriverVersion()),
        "vendor id" => $properties->getVendorID(),
        "layers" => implode(", ", array_map(fn(VkLayerProperties $p) => $p->getLayerName(), $vulkan->enum("vkEnumerateDeviceLayerProperties", VkLayerProperties::class, $physicalDevice))),
        "queue families" => implode("", array_map(fn(VkQueueFamilyProperties $p) => printEntry(null, [
            "minImageTransferGranularity" => "(" . $p->getMinImageTransferGranularity()->getWidth() . "," . $p->getMinImageTransferGranularity()->getDepth() . "," . $p->getMinImageTransferGranularity()->getHeight() . ")",
            "queueCount" => $p->getQueueCount(),
            "flags" => implode("|",array_map(fn(VkQueueFlagBits $b) => $b->name, $p->getQueueFlags()))
        ]), $vulkan->enum("vkGetPhysicalDeviceQueueFamilyProperties", VkQueueFamilyProperties::class, $physicalDevice))),
    ]);
}
// go with physical device 0 out of laziness
$physicalDevice = $physicalDevices[0];
// also go with queue family zero out of laziness
$queueFamily = 0;

$queuePriority = $vulkan->ffi->new("float");
$queuePriority->cdata = 1.0;

$queueCreateInfo = \iggyvolz\vulkan\struct\VkDeviceQueueCreateInfo::create($vulkan,
    sType: VkStructureType::DeviceQueueCreateInfo,
    queueFamilyIndex: $queueFamily,
    queueCount: 1,
    pQueuePriorities: new OpaquePointer(FFI::addr($queuePriority), $vulkan->ffi, $queuePriority)
);

$physicalDeviceFeatures = VkPhysicalDeviceFeatures::create($vulkan
);
$deviceCreateInfo = VkDeviceCreateInfo::create($vulkan,
    sType: VkStructureType::DeviceCreateInfo,
    queueCreateInfoCount: 1,
    pQueueCreateInfos: ObjectPointer::of($queueCreateInfo),
    pEnabledFeatures: ObjectPointer::of($physicalDeviceFeatures)
);

$device = $vulkan->get("vkCreateDevice", VkDevice::class, $physicalDevice, ObjectPointer::of($deviceCreateInfo), ObjectPointer::null());
$queue = $vulkan->get("vkGetDeviceQueue", \iggyvolz\vulkan\struct\VkQueue::class, $device, $queueFamily, 0);

// Initialize an X window
// todo integrate with windows once I get back to my windows machine
$x = X11::init();
$display = $x->XOpenDisplay(null);
assert(!is_null($display));
$screen = $display[0]->getScreens()[$display[0]->getDefaultScreen()];
$window = $x->XCreateSimpleWindow($display, $screen->getRoot(), 10, 10, 960, 540, 1, $screen->getBlackPixel(), $screen->getWhitePixel());
$x->XStoreName($display, $window, "foo");
$x->XSelectInput($display, $window, (1 << 0) || (1 << 1));
$x->XMapWindow($display, $window);

// Create service

//$surfaceCreateInfo = \iggyvolz\vulkan\struct\VkXlibSurfaceCreateInfoKHR::create($vulkan,
//    sType: VkStructureType::
//);

// X event loop
while(true) {
    $event = $x->newXEvent();
    /** @var XEventPtr $eventPtr */
    $eventPtr = $event->ptr();
    $x->XNextEvent($display, $eventPtr);
    if($event->getType() === 2) {
        $keyEvent = $event->getXkey();
        $keycode = $keyEvent->getKeycode();
        if($keycode === 9) {
            break;
        }
    }
}
$x->XCloseDisplay($display);