<?php

namespace iggyvolz\vulkan\ext;

class VkNvCoverageReductionMode
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pCombinationCount
     */
    public function vkGetPhysicalDeviceSupportedFramebufferMixedSamplesCombinationsNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\IntPointer $pCombinationCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pCombinationCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pCombinationCount = $cValue;
    }
}
