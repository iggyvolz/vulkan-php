<?php

namespace iggyvolz\vulkan\ext;

class VkNvAcquireWinrtDisplay
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireWinrtDisplayNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkDisplayKHR $display,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $display;
        // VkDisplayKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $display = $cValue;
        $cValue = $this->vulkan->call("vkAcquireWinrtDisplayNV", $physicalDevice, $display);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param int $deviceRelativeId
     */
    public function vkGetWinrtDisplayNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $deviceRelativeId,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $deviceRelativeId;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $deviceRelativeId = $cValue;
    }
}
