<?php

namespace iggyvolz\vulkan\ext;

class VkNvCooperativeMatrix
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount
     */
    public function vkGetPhysicalDeviceCooperativeMatrixPropertiesNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pPropertyCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pPropertyCount = $cValue;
    }
}
