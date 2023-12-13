<?php

use iggyvolz\vulkan\enum\VkStructureType;
use iggyvolz\vulkan\struct\VkApplicationInfo;
use iggyvolz\vulkan\struct\VkInstance;
use iggyvolz\vulkan\struct\VkInstanceCreateInfo;
use iggyvolz\vulkan\struct\VkPhysicalDevice;
use iggyvolz\vulkan\struct\VkPhysicalDeviceProperties;
use iggyvolz\vulkan\util\ObjectPointer;
use iggyvolz\vulkan\util\VulkanVersion;
use iggyvolz\vulkan\Vulkan;

require_once __DIR__ . "/vendor/autoload.php";
$vulkan = Vulkan::init();

$version = $vulkan->getVersion();
$extensions = $vulkan->getExtensions();

function printEntry(string $name, array $properties): string
{
    return "$name (" . implode(", ",
        array_map(fn(string $value, string $key) => "$key: $value", $properties, array_keys($properties))
        ) . ")" . PHP_EOL;
}

echo "Vulkan $version with " . count($extensions) . " extensions:" . PHP_EOL;
foreach ($extensions as $extension) {
    echo "- " . printEntry($extension->getExtensionName(), [
        "version" => $extension->getSpecVersion()
    ]);
}

echo PHP_EOL;


$createInfo = VkInstanceCreateInfo::create($vulkan,
    sType: VkStructureType::InstanceCreateInfo,
    pApplicationInfo: ObjectPointer::of(VkApplicationInfo::create($vulkan,
        sType: VkStructureType::ApplicationInfo
    ))
);

/** @var VkInstance $instance */
$instance = $vulkan->get("vkCreateInstance", VkInstance::class, ObjectPointer::of($createInfo), ObjectPointer::null());

$devices = $vulkan->enum("vkEnumeratePhysicalDevices", VkPhysicalDevice::class, $instance);
echo count($devices) . " devices connected:" . PHP_EOL;
foreach ($devices as $device) {
    /** @var VkPhysicalDeviceProperties $properties */
    $properties = $vulkan->get("vkGetPhysicalDeviceProperties", VkPhysicalDeviceProperties::class, $device);

    echo "- " . printEntry($properties->getDeviceName(), [
        "type" => $properties->getDeviceType()->name,
        "device ID" => $properties->getDeviceID(),
        "api version" => VulkanVersion::from($properties->getApiVersion()),
        "driver version" => VulkanVersion::from($properties->getDriverVersion()),
        "vendor id" => $properties->getVendorID(),
    ]);
}
