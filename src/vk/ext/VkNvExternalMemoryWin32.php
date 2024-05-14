<?php

namespace iggyvolz\vulkan\ext;

class VkNvExternalMemoryWin32
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory
     * @param list<\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV> $handleType
     * @param \iggyvolz\vulkan\util\Pointer $pHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetMemoryWin32HandleNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceMemory $memory,
        array $handleType,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $memory;
        // VkDeviceMemory => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $memory = $cValue;
        $phpValue = $handleType;
        // VkExternalMemoryHandleTypeFlagsNV => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::toInt(...$phpValue);
        $handleType = $cValue;
        $phpValue = $pHandle;
        // HANDLE* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetMemoryWin32HandleNV", $device, $memory, $handleType, $pHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
