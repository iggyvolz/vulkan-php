<?php

namespace iggyvolz\vulkan\ext;

class VkKhrDescriptorUpdateTemplate
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
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
