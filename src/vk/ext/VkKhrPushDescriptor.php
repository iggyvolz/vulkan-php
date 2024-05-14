<?php

namespace iggyvolz\vulkan\ext;

class VkKhrPushDescriptor
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout
     * @param int $set
     * @param int $descriptorWriteCount
     * @param \iggyvolz\vulkan\struct\VkWriteDescriptorSet $pDescriptorWrites
     * @return void
     */
    public function vkCmdPushDescriptorSetKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        \iggyvolz\vulkan\struct\VkPipelineLayout $layout,
        int $set,
        int $descriptorWriteCount,
        \iggyvolz\vulkan\struct\VkWriteDescriptorSet $pDescriptorWrites,
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
        $phpValue = $descriptorWriteCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $descriptorWriteCount = $cValue;
        $phpValue = $pDescriptorWrites;
        // const VkWriteDescriptorSet* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDescriptorWrites = $cValue;
        $cValue = $this->vulkan->call("vkCmdPushDescriptorSetKHR", $commandBuffer, $pipelineBindPoint, $layout, $set, $descriptorWriteCount, $pDescriptorWrites);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout
     * @param int $set
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return void
     */
    public function vkCmdPushDescriptorSetWithTemplateKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        \iggyvolz\vulkan\struct\VkPipelineLayout $layout,
        int $set,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $descriptorUpdateTemplate;
        // VkDescriptorUpdateTemplate => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplate = $cValue;
        $phpValue = $layout;
        // VkPipelineLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $layout = $cValue;
        $phpValue = $set;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $set = $cValue;
        $phpValue = $pData;
        // const void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkCmdPushDescriptorSetWithTemplateKHR", $commandBuffer, $descriptorUpdateTemplate, $layout, $set, $pData);
    }
}
