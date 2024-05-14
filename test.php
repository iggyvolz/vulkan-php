<?php

use iggyvolz\vulkan\enum\VkStructureType;
use iggyvolz\vulkan\struct\VkInstanceCreateInfo;
use iggyvolz\vulkan\util\VulkanFactory;

require_once __DIR__ . "/vendor/autoload.php";
$factory = new VulkanFactory();
$createInfo = VkInstanceCreateInfo::create($factory->ffi, sType: VkStructureType::InstanceCreateInfo);
$vulkan = $factory->create(layers: ["VK_LAYER_KHRONOS_validation"]);
$vulkan10 = $vulkan->get(\iggyvolz\vulkan\ext\VkVersion10::class);
$count = \iggyvolz\vulkan\util\IntPointer::new("uint32_t", $vulkan);
$vulkan10->vkEnumeratePhysicalDevices($vulkan->instance, $count, null);
//$ffi = FFI::cdef(__DIR__ . "/src/vk/vulkan.h", "vulkan-1.dll");
//$vk11 = new \iggyvolz\vulkan\ext\VkVersion11($ffi);
//$version = \iggyvolz\vulkan\util\IntPointer::new()
//$vk11->vkEnumerateInstanceVersion();
//$vulkanFactory = new \iggyvolz\vulkan\util\VulkanFactory();
//echo $vulkanFactory->instanceVersion . PHP_EOL;
//echo "Extensions:\n";
//foreach ($vulkanFactory->instanceExtensions as $extension) {
//    echo "- " . $extension->getExtensionName() . ": " . new Version($extension->getSpecVersion()) . PHP_EOL;
//}
//echo "Layers:\n";
//foreach ($vulkanFactory->layers as $layer) {
//    echo "- " . $layer->getLayerName() . ": " . Version::from($layer->getSpecVersion()) . " revision " . $layer->getImplementationVersion() . PHP_EOL;
//    foreach($vulkanFactory->layerExtensions[$layer->getLayerName()] as $layerExtension) {
//        echo "--- " . $layerExtension->getExtensionName() . ": " . new Version($layerExtension->getSpecVersion()) . PHP_EOL;
//    }
//}