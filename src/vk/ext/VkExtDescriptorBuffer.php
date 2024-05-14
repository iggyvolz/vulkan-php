<?php

namespace iggyvolz\vulkan\ext;

class VkExtDescriptorBuffer
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetLayout $layout
     * @param \iggyvolz\vulkan\util\Pointer $pLayoutSizeInBytes
     * @return void
     */
    public function vkGetDescriptorSetLayoutSizeEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSetLayout $layout,
        \iggyvolz\vulkan\util\Pointer $pLayoutSizeInBytes,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $layout;
        // VkDescriptorSetLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $layout = $cValue;
        $phpValue = $pLayoutSizeInBytes;
        // VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pLayoutSizeInBytes = $cValue;
        $cValue = $this->vulkan->call("vkGetDescriptorSetLayoutSizeEXT", $device, $layout, $pLayoutSizeInBytes);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetLayout $layout
     * @param int $binding
     * @param \iggyvolz\vulkan\util\Pointer $pOffset
     * @return void
     */
    public function vkGetDescriptorSetLayoutBindingOffsetEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSetLayout $layout,
        int $binding,
        \iggyvolz\vulkan\util\Pointer $pOffset,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $layout;
        // VkDescriptorSetLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $layout = $cValue;
        $phpValue = $binding;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $binding = $cValue;
        $phpValue = $pOffset;
        // VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pOffset = $cValue;
        $cValue = $this->vulkan->call("vkGetDescriptorSetLayoutBindingOffsetEXT", $device, $layout, $binding, $pOffset);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorGetInfoEXT $pDescriptorInfo
     * @param int $dataSize
     * @param \iggyvolz\vulkan\util\Pointer $pDescriptor
     * @return void
     */
    public function vkGetDescriptorEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorGetInfoEXT $pDescriptorInfo,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pDescriptor,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pDescriptorInfo;
        // const VkDescriptorGetInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDescriptorInfo = $cValue;
        $phpValue = $dataSize;
        // size_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dataSize = $cValue;
        $phpValue = $pDescriptor;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pDescriptor = $cValue;
        $cValue = $this->vulkan->call("vkGetDescriptorEXT", $device, $pDescriptorInfo, $dataSize, $pDescriptor);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $bufferCount
     * @param \iggyvolz\vulkan\struct\VkDescriptorBufferBindingInfoEXT $pBindingInfos
     * @return void
     */
    public function vkCmdBindDescriptorBuffersEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $bufferCount,
        \iggyvolz\vulkan\struct\VkDescriptorBufferBindingInfoEXT $pBindingInfos,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $bufferCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bufferCount = $cValue;
        $phpValue = $pBindingInfos;
        // const VkDescriptorBufferBindingInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindingInfos = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindDescriptorBuffersEXT", $commandBuffer, $bufferCount, $pBindingInfos);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout
     * @param int $firstSet
     * @param int $setCount
     * @param \iggyvolz\vulkan\util\IntPointer $pBufferIndices
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets
     * @return void
     */
    public function vkCmdSetDescriptorBufferOffsetsEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        \iggyvolz\vulkan\struct\VkPipelineLayout $layout,
        int $firstSet,
        int $setCount,
        \iggyvolz\vulkan\util\IntPointer $pBufferIndices,
        \iggyvolz\vulkan\util\Pointer $pOffsets,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pipelineBindPoint;
        // VkPipelineBindPoint => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $pipelineBindPoint = $cValue;
        $phpValue = $layout;
        // VkPipelineLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $layout = $cValue;
        $phpValue = $firstSet;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstSet = $cValue;
        $phpValue = $setCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $setCount = $cValue;
        $phpValue = $pBufferIndices;
        // const uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pBufferIndices = $cValue;
        $phpValue = $pOffsets;
        // const VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pOffsets = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDescriptorBufferOffsetsEXT", $commandBuffer, $pipelineBindPoint, $layout, $firstSet, $setCount, $pBufferIndices, $pOffsets);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout
     * @param int $set
     * @return void
     */
    public function vkCmdBindDescriptorBufferEmbeddedSamplersEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        \iggyvolz\vulkan\struct\VkPipelineLayout $layout,
        int $set,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pipelineBindPoint;
        // VkPipelineBindPoint => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $pipelineBindPoint = $cValue;
        $phpValue = $layout;
        // VkPipelineLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $layout = $cValue;
        $phpValue = $set;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $set = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindDescriptorBufferEmbeddedSamplersEXT", $commandBuffer, $pipelineBindPoint, $layout, $set);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferCaptureDescriptorDataInfoEXT $pInfo
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetBufferOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferCaptureDescriptorDataInfoEXT $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkBufferCaptureDescriptorDataInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetBufferOpaqueCaptureDescriptorDataEXT", $device, $pInfo, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageCaptureDescriptorDataInfoEXT $pInfo
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetImageOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageCaptureDescriptorDataInfoEXT $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkImageCaptureDescriptorDataInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetImageOpaqueCaptureDescriptorDataEXT", $device, $pInfo, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageViewCaptureDescriptorDataInfoEXT $pInfo
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetImageViewOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageViewCaptureDescriptorDataInfoEXT $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkImageViewCaptureDescriptorDataInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetImageViewOpaqueCaptureDescriptorDataEXT", $device, $pInfo, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSamplerCaptureDescriptorDataInfoEXT $pInfo
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetSamplerOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSamplerCaptureDescriptorDataInfoEXT $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkSamplerCaptureDescriptorDataInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetSamplerOpaqueCaptureDescriptorDataEXT", $device, $pInfo, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureCaptureDescriptorDataInfoEXT $pInfo
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetAccelerationStructureOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureCaptureDescriptorDataInfoEXT $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkAccelerationStructureCaptureDescriptorDataInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetAccelerationStructureOpaqueCaptureDescriptorDataEXT", $device, $pInfo, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
