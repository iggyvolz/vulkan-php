<?php

namespace iggyvolz\vulkan\ext;

class VkFuchsiaBufferCollection
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionCreateInfoFUCHSIA $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateBufferCollectionFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferCollectionCreateInfoFUCHSIA $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkBufferCollectionCreateInfoFUCHSIA* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection
     * @param \iggyvolz\vulkan\struct\VkBufferConstraintsInfoFUCHSIA $pBufferConstraintsInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkSetBufferCollectionBufferConstraintsFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection,
        \iggyvolz\vulkan\struct\VkBufferConstraintsInfoFUCHSIA $pBufferConstraintsInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $collection;
        // VkBufferCollectionFUCHSIA => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $collection = $cValue;
        $phpValue = $pBufferConstraintsInfo;
        // const VkBufferConstraintsInfoFUCHSIA* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBufferConstraintsInfo = $cValue;
        $cValue = $this->vulkan->call("vkSetBufferCollectionBufferConstraintsFUCHSIA", $device, $collection, $pBufferConstraintsInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection
     * @param \iggyvolz\vulkan\struct\VkImageConstraintsInfoFUCHSIA $pImageConstraintsInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkSetBufferCollectionImageConstraintsFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection,
        \iggyvolz\vulkan\struct\VkImageConstraintsInfoFUCHSIA $pImageConstraintsInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $collection;
        // VkBufferCollectionFUCHSIA => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $collection = $cValue;
        $phpValue = $pImageConstraintsInfo;
        // const VkImageConstraintsInfoFUCHSIA* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImageConstraintsInfo = $cValue;
        $cValue = $this->vulkan->call("vkSetBufferCollectionImageConstraintsFUCHSIA", $device, $collection, $pImageConstraintsInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyBufferCollectionFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $collection;
        // VkBufferCollectionFUCHSIA => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $collection = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyBufferCollectionFUCHSIA", $device, $collection, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection
     */
    public function vkGetBufferCollectionPropertiesFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $collection;
        // VkBufferCollectionFUCHSIA => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $collection = $cValue;
    }
}
