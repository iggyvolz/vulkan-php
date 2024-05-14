<?php

namespace iggyvolz\vulkan\ext;

class VkExtAcquireDrmDisplay
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param int $drmFd
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireDrmDisplayEXT(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $drmFd,
        \iggyvolz\vulkan\struct\VkDisplayKHR $display,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $drmFd;
        // int32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $drmFd = $cValue;
        $phpValue = $display;
        // VkDisplayKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $display = $cValue;
        $cValue = $this->vulkan->call("vkAcquireDrmDisplayEXT", $physicalDevice, $drmFd, $display);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param int $drmFd
     * @param int $connectorId
     */
    public function vkGetDrmDisplayEXT(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $drmFd,
        int $connectorId,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $drmFd;
        // int32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $drmFd = $cValue;
        $phpValue = $connectorId;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $connectorId = $cValue;
    }
}
