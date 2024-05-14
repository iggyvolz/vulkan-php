<?php

namespace iggyvolz\vulkan\ext;

class VkKhrExternalFenceFd
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFenceGetFdInfoKHR $pGetFdInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pFd
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetFenceFdKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFenceGetFdInfoKHR $pGetFdInfo,
        \iggyvolz\vulkan\util\IntPointer $pFd,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetFdInfo;
        // const VkFenceGetFdInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetFdInfo = $cValue;
        $phpValue = $pFd;
        // int* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pFd = $cValue;
        $cValue = $this->vulkan->call("vkGetFenceFdKHR", $device, $pGetFdInfo, $pFd);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImportFenceFdInfoKHR $pImportFenceFdInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkImportFenceFdKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImportFenceFdInfoKHR $pImportFenceFdInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pImportFenceFdInfo;
        // const VkImportFenceFdInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImportFenceFdInfo = $cValue;
        $cValue = $this->vulkan->call("vkImportFenceFdKHR", $device, $pImportFenceFdInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
