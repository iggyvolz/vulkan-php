<?php

namespace iggyvolz\vulkan\ext;

class VkExtExternalMemoryHost
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType
     * @param \iggyvolz\vulkan\util\Pointer $pHostPointer
     */
    public function vkGetMemoryHostPointerPropertiesEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        \iggyvolz\vulkan\util\Pointer $pHostPointer,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $handleType;
        // VkExternalMemoryHandleTypeFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $handleType = $cValue;
        $phpValue = $pHostPointer;
        // const void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pHostPointer = $cValue;
    }
}
