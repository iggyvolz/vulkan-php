<?php

namespace iggyvolz\vulkan\ext;

class VkKhrExternalFenceWin32
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFenceGetWin32HandleInfoKHR $pGetWin32HandleInfo
     * @param \iggyvolz\vulkan\util\Pointer $pHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetFenceWin32HandleKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFenceGetWin32HandleInfoKHR $pGetWin32HandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetWin32HandleInfo;
        // const VkFenceGetWin32HandleInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfo = $cValue;
        $phpValue = $pHandle;
        // HANDLE* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetFenceWin32HandleKHR", $device, $pGetWin32HandleInfo, $pHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImportFenceWin32HandleInfoKHR $pImportFenceWin32HandleInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkImportFenceWin32HandleKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImportFenceWin32HandleInfoKHR $pImportFenceWin32HandleInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pImportFenceWin32HandleInfo;
        // const VkImportFenceWin32HandleInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImportFenceWin32HandleInfo = $cValue;
        $cValue = $this->vulkan->call("vkImportFenceWin32HandleKHR", $device, $pImportFenceWin32HandleInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
