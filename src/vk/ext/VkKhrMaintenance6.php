<?php

namespace iggyvolz\vulkan\ext;

class VkKhrMaintenance6
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBindDescriptorSetsInfoKHR $pBindDescriptorSetsInfo
     * @return void
     */
    public function vkCmdBindDescriptorSets2KHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBindDescriptorSetsInfoKHR $pBindDescriptorSetsInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pBindDescriptorSetsInfo;
        // const VkBindDescriptorSetsInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindDescriptorSetsInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindDescriptorSets2KHR", $commandBuffer, $pBindDescriptorSetsInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkPushConstantsInfoKHR $pPushConstantsInfo
     * @return void
     */
    public function vkCmdPushConstants2KHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkPushConstantsInfoKHR $pPushConstantsInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pPushConstantsInfo;
        // const VkPushConstantsInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pPushConstantsInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdPushConstants2KHR", $commandBuffer, $pPushConstantsInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkPushDescriptorSetInfoKHR $pPushDescriptorSetInfo
     * @return void
     */
    public function vkCmdPushDescriptorSet2KHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkPushDescriptorSetInfoKHR $pPushDescriptorSetInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pPushDescriptorSetInfo;
        // const VkPushDescriptorSetInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pPushDescriptorSetInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdPushDescriptorSet2KHR", $commandBuffer, $pPushDescriptorSetInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkPushDescriptorSetWithTemplateInfoKHR $pPushDescriptorSetWithTemplateInfo
     * @return void
     */
    public function vkCmdPushDescriptorSetWithTemplate2KHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkPushDescriptorSetWithTemplateInfoKHR $pPushDescriptorSetWithTemplateInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pPushDescriptorSetWithTemplateInfo;
        // const VkPushDescriptorSetWithTemplateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pPushDescriptorSetWithTemplateInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdPushDescriptorSetWithTemplate2KHR", $commandBuffer, $pPushDescriptorSetWithTemplateInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkSetDescriptorBufferOffsetsInfoEXT $pSetDescriptorBufferOffsetsInfo
     * @return void
     */
    public function vkCmdSetDescriptorBufferOffsets2EXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkSetDescriptorBufferOffsetsInfoEXT $pSetDescriptorBufferOffsetsInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pSetDescriptorBufferOffsetsInfo;
        // const VkSetDescriptorBufferOffsetsInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSetDescriptorBufferOffsetsInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDescriptorBufferOffsets2EXT", $commandBuffer, $pSetDescriptorBufferOffsetsInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBindDescriptorBufferEmbeddedSamplersInfoEXT $pBindDescriptorBufferEmbeddedSamplersInfo
     * @return void
     */
    public function vkCmdBindDescriptorBufferEmbeddedSamplers2EXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBindDescriptorBufferEmbeddedSamplersInfoEXT $pBindDescriptorBufferEmbeddedSamplersInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pBindDescriptorBufferEmbeddedSamplersInfo;
        // const VkBindDescriptorBufferEmbeddedSamplersInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindDescriptorBufferEmbeddedSamplersInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindDescriptorBufferEmbeddedSamplers2EXT", $commandBuffer, $pBindDescriptorBufferEmbeddedSamplersInfo);
    }
}
