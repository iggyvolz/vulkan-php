<?php

namespace iggyvolz\vulkan\ext;

class VkFuchsiaExternalSemaphore
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphoreGetZirconHandleInfoFUCHSIA $pGetZirconHandleInfo
     * @param \iggyvolz\vulkan\util\Pointer $pZirconHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetSemaphoreZirconHandleFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphoreGetZirconHandleInfoFUCHSIA $pGetZirconHandleInfo,
        \iggyvolz\vulkan\util\Pointer $pZirconHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetZirconHandleInfo;
        // const VkSemaphoreGetZirconHandleInfoFUCHSIA* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetZirconHandleInfo = $cValue;
        $phpValue = $pZirconHandle;
        // zx_handle_t* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pZirconHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetSemaphoreZirconHandleFUCHSIA", $device, $pGetZirconHandleInfo, $pZirconHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImportSemaphoreZirconHandleInfoFUCHSIA $pImportSemaphoreZirconHandleInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkImportSemaphoreZirconHandleFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImportSemaphoreZirconHandleInfoFUCHSIA $pImportSemaphoreZirconHandleInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pImportSemaphoreZirconHandleInfo;
        // const VkImportSemaphoreZirconHandleInfoFUCHSIA* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImportSemaphoreZirconHandleInfo = $cValue;
        $cValue = $this->vulkan->call("vkImportSemaphoreZirconHandleFUCHSIA", $device, $pImportSemaphoreZirconHandleInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
