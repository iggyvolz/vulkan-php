<?php

namespace iggyvolz\vulkan\ext;

class VkGoogleDisplayTiming
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     */
    public function vkGetRefreshCycleDurationGOOGLE(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentationTimingCount
     */
    public function vkGetPastPresentationTimingGOOGLE(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\IntPointer $pPresentationTimingCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $pPresentationTimingCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pPresentationTimingCount = $cValue;
    }
}
