<?php

namespace iggyvolz\vulkan\ext;

class VkKhrPresentWait
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param int $presentId
     * @param int $timeout
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkWaitForPresentKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        int $presentId,
        int $timeout,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $presentId;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $presentId = $cValue;
        $phpValue = $timeout;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $timeout = $cValue;
        $cValue = $this->vulkan->call("vkWaitForPresentKHR", $device, $swapchain, $presentId, $timeout);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
