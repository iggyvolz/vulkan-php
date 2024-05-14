<?php

namespace iggyvolz\vulkan\ext;

class VkExtDirectModeDisplay
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
    public function vkReleaseDisplayEXT(
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
        $cValue = $this->vulkan->call("vkReleaseDisplayEXT", $physicalDevice, $display);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
