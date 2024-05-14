<?php

namespace iggyvolz\vulkan\ext;

class VkExtMetalObjects
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     */
    public function vkExportMetalObjectsEXT(\iggyvolz\vulkan\struct\VkDevice $device)
    {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
    }
}
