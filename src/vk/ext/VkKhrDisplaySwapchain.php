<?php

namespace iggyvolz\vulkan\ext;

class VkKhrDisplaySwapchain
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $swapchainCount
     * @param \iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR $pCreateInfos
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateSharedSwapchainsKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $swapchainCount,
        \iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR $pCreateInfos,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchainCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $swapchainCount = $cValue;
        $phpValue = $pCreateInfos;
        // const VkSwapchainCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfos = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }
}
