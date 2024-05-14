<?php

namespace iggyvolz\vulkan\ext;

class VkQnxExternalMemoryScreenBuffer
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\util\Pointer $buffer
     */
    public function vkGetScreenBufferPropertiesQNX(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\util\Pointer $buffer,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $buffer;
        // const struct _screen_buffer* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
    }
}
