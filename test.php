<?php

use iggyvolz\vulkan\ext\VkVersion10;
use iggyvolz\vulkan\util\Version;
use iggyvolz\vulkan\util\VulkanFactory;

require_once __DIR__ . "/vendor/autoload.php";
$factory = new VulkanFactory();
echo "Vulkan version $factory->instanceVersion\n";
echo "Extensions:\n";
foreach($factory->instanceExtensions as $extension) {
    echo "- " . $extension->getExtensionName() . " " . $extension->getSpecVersion() . PHP_EOL;
}
echo "Layers:\n";
foreach($factory->layers as $layer) {
    echo "- " . $layer->getLayerName() . " (" . $layer->getDescription() . ") " . Version::from($layer->getSpecVersion()) . " " . $layer->getImplementationVersion() . PHP_EOL;
}
$vulkan = $factory->create(layers: ["VK_LAYER_KHRONOS_validation"]);
$vulkan10 = $vulkan->get(VkVersion10::class);
$physicalDevices = $vulkan10->vkEnumeratePhysicalDevices($vulkan->instance);
echo "Physical devices:\n";
foreach($physicalDevices as $physicalDevice) {
    $properties = $vulkan10->vkGetPhysicalDeviceProperties($physicalDevice);
    echo "- " . $properties->getDeviceName()  . "(" . $properties->getDeviceType()->value . ")". PHP_EOL;

}