<?php

namespace iggyvolz\vulkan\ext;

class VkKhrExternalMemoryWin32
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryGetWin32HandleInfoKHR $pGetWin32HandleInfo
     * @param \iggyvolz\vulkan\util\Pointer $pHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetMemoryWin32HandleKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryGetWin32HandleInfoKHR $pGetWin32HandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetWin32HandleInfo;
        // const VkMemoryGetWin32HandleInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfo = $cValue;
        $phpValue = $pHandle;
        // HANDLE* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetMemoryWin32HandleKHR", $device, $pGetWin32HandleInfo, $pHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType
     * @param \iggyvolz\vulkan\util\Pointer $handle
     */
    public function vkGetMemoryWin32HandlePropertiesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        \iggyvolz\vulkan\util\Pointer $handle,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $handleType;
        // VkExternalMemoryHandleTypeFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $handleType = $cValue;
        $phpValue = $handle;
        // HANDLE => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $handle = $cValue;
    }
}
