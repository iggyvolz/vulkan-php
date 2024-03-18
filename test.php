<?php

use iggyvolz\vulkan\util\Version;

require_once __DIR__ . "/vendor/autoload.php";
$vulkanFactory = new \iggyvolz\vulkan\util\VulkanFactory();
echo $vulkanFactory->instanceVersion . PHP_EOL;
echo "Extensions:\n";
foreach ($vulkanFactory->instanceExtensions as $extension) {
    echo "- " . $extension->getExtensionName() . ": " . new Version($extension->getSpecVersion()) . PHP_EOL;
}
echo "Layers:\n";
foreach ($vulkanFactory->layers as $layer) {
    echo "- " . $layer->getLayerName() . ": " . Version::from($layer->getSpecVersion()) . " revision " . $layer->getImplementationVersion() . PHP_EOL;
    foreach($vulkanFactory->layerExtensions[$layer->getLayerName()] as $layerExtension) {
        echo "--- " . $layerExtension->getExtensionName() . ": " . new Version($layerExtension->getSpecVersion()) . PHP_EOL;
    }
}