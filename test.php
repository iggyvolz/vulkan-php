<?php

use iggyvolz\vulkan\Version;
use iggyvolz\vulkan\Vulkan;

require_once __DIR__."/vendor/autoload.php";
ini_set('xdebug.var_display_max_depth', 5);
$vulkan = Vulkan::get();

foreach($vulkan->layers as $layer) {
    echo $layer->name . PHP_EOL;
}

$instance = $vulkan->createInstance(
    'My Application',
    1,
    'My Engine',
    1,
    new Version(1, 4),
    ["VK_LAYER_KHRONOS_validation"],
    []
);

var_dump($instance->physicalDevices[0]->properties);