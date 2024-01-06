<?php

namespace iggyvolz\vulkan\util;

use iggyvolz\vulkan\struct\VkExtensionProperties;
use iggyvolz\vulkan\struct\VkInstance;
use iggyvolz\vulkan\struct\VkLayerProperties;
use iggyvolz\vulkan\Vulkan;

interface InstanceInitializer
{
    /**
     * @param Version $systemVersion
     * @param list<VkExtensionProperties> $availableExtensions
     * @param list<VkLayerProperties> $availableLayers
     * @return SimpleInstanceCreateInfo|\Closure(Vulkan):VkInstance
     */
    public function getCreateInfo(
        Version $systemVersion,
        array   $availableExtensions,
        array   $availableLayers,
    ): \Closure|SimpleInstanceCreateInfo;
}