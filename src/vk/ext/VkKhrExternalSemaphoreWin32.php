<?php

namespace iggyvolz\vulkan\ext;

class VkKhrExternalSemaphoreWin32
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphoreGetWin32HandleInfoKHR $pGetWin32HandleInfo
     * @param \iggyvolz\vulkan\util\Pointer $pHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetSemaphoreWin32HandleKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphoreGetWin32HandleInfoKHR $pGetWin32HandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetWin32HandleInfo;
        // const VkSemaphoreGetWin32HandleInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfo = $cValue;
        $phpValue = $pHandle;
        // HANDLE* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetSemaphoreWin32HandleKHR", $device, $pGetWin32HandleInfo, $pHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImportSemaphoreWin32HandleInfoKHR $pImportSemaphoreWin32HandleInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkImportSemaphoreWin32HandleKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImportSemaphoreWin32HandleInfoKHR $pImportSemaphoreWin32HandleInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pImportSemaphoreWin32HandleInfo;
        // const VkImportSemaphoreWin32HandleInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImportSemaphoreWin32HandleInfo = $cValue;
        $cValue = $this->vulkan->call("vkImportSemaphoreWin32HandleKHR", $device, $pImportSemaphoreWin32HandleInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
