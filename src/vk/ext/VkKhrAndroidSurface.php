<?php

namespace iggyvolz\vulkan\ext;

class VkKhrAndroidSurface
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkAndroidSurfaceCreateInfoKHR $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateAndroidSurfaceKHR(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkAndroidSurfaceCreateInfoKHR $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pCreateInfo;
        // const VkAndroidSurfaceCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }
}
