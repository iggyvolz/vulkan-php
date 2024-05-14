<?php

namespace iggyvolz\vulkan\ext;

class VkKhrExternalSemaphoreFd
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphoreGetFdInfoKHR $pGetFdInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pFd
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetSemaphoreFdKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphoreGetFdInfoKHR $pGetFdInfo,
        \iggyvolz\vulkan\util\IntPointer $pFd,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetFdInfo;
        // const VkSemaphoreGetFdInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetFdInfo = $cValue;
        $phpValue = $pFd;
        // int* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pFd = $cValue;
        $cValue = $this->vulkan->call("vkGetSemaphoreFdKHR", $device, $pGetFdInfo, $pFd);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImportSemaphoreFdInfoKHR $pImportSemaphoreFdInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkImportSemaphoreFdKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImportSemaphoreFdInfoKHR $pImportSemaphoreFdInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pImportSemaphoreFdInfo;
        // const VkImportSemaphoreFdInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImportSemaphoreFdInfo = $cValue;
        $cValue = $this->vulkan->call("vkImportSemaphoreFdKHR", $device, $pImportSemaphoreFdInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
