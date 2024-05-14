<?php

namespace iggyvolz\vulkan\ext;

class VkNvExternalSciSync2
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFenceGetSciSyncInfoNV $pGetSciSyncHandleInfo
     * @param \iggyvolz\vulkan\util\Pointer $pHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetFenceSciSyncFenceNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFenceGetSciSyncInfoNV $pGetSciSyncHandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetSciSyncHandleInfo;
        // const VkFenceGetSciSyncInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetSciSyncHandleInfo = $cValue;
        $phpValue = $pHandle;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetFenceSciSyncFenceNV", $device, $pGetSciSyncHandleInfo, $pHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFenceGetSciSyncInfoNV $pGetSciSyncHandleInfo
     * @param \iggyvolz\vulkan\util\Pointer $pHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetFenceSciSyncObjNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFenceGetSciSyncInfoNV $pGetSciSyncHandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetSciSyncHandleInfo;
        // const VkFenceGetSciSyncInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetSciSyncHandleInfo = $cValue;
        $phpValue = $pHandle;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetFenceSciSyncObjNV", $device, $pGetSciSyncHandleInfo, $pHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImportFenceSciSyncInfoNV $pImportFenceSciSyncInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkImportFenceSciSyncFenceNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImportFenceSciSyncInfoNV $pImportFenceSciSyncInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pImportFenceSciSyncInfo;
        // const VkImportFenceSciSyncInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImportFenceSciSyncInfo = $cValue;
        $cValue = $this->vulkan->call("vkImportFenceSciSyncFenceNV", $device, $pImportFenceSciSyncInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImportFenceSciSyncInfoNV $pImportFenceSciSyncInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkImportFenceSciSyncObjNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImportFenceSciSyncInfoNV $pImportFenceSciSyncInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pImportFenceSciSyncInfo;
        // const VkImportFenceSciSyncInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImportFenceSciSyncInfo = $cValue;
        $cValue = $this->vulkan->call("vkImportFenceSciSyncObjNV", $device, $pImportFenceSciSyncInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkSciSyncAttributesInfoNV $pSciSyncAttributesInfo
     * @param mixed $pAttributes
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetPhysicalDeviceSciSyncAttributesNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkSciSyncAttributesInfoNV $pSciSyncAttributesInfo,
        mixed $pAttributes,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pSciSyncAttributesInfo;
        // const VkSciSyncAttributesInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSciSyncAttributesInfo = $cValue;
        $phpValue = $pAttributes;
        // NvSciSyncAttrList => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - NvSciSyncAttrList!");
        $pAttributes = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceSciSyncAttributesNV", $physicalDevice, $pSciSyncAttributesInfo, $pAttributes);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolCreateInfoNV $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateSemaphoreSciSyncPoolNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolCreateInfoNV $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkSemaphoreSciSyncPoolCreateInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolNV $semaphorePool
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroySemaphoreSciSyncPoolNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolNV $semaphorePool,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $semaphorePool;
        // VkSemaphoreSciSyncPoolNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $semaphorePool = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroySemaphoreSciSyncPoolNV", $device, $semaphorePool, $pAllocator);
    }
}
