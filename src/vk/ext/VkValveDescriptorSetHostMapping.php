<?php

namespace iggyvolz\vulkan\ext;

class VkValveDescriptorSetHostMapping
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetBindingReferenceVALVE $pBindingReference
     */
    public function vkGetDescriptorSetLayoutHostMappingInfoVALVE(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSetBindingReferenceVALVE $pBindingReference,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pBindingReference;
        // const VkDescriptorSetBindingReferenceVALVE* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindingReference = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSet $descriptorSet
     * @param \iggyvolz\vulkan\util\Pointer $ppData
     * @return void
     */
    public function vkGetDescriptorSetHostMappingVALVE(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSet $descriptorSet,
        \iggyvolz\vulkan\util\Pointer $ppData,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $descriptorSet;
        // VkDescriptorSet => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorSet = $cValue;
        $phpValue = $ppData;
        // void** => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $ppData = $cValue;
        $cValue = $this->vulkan->call("vkGetDescriptorSetHostMappingVALVE", $device, $descriptorSet, $ppData);
    }
}
