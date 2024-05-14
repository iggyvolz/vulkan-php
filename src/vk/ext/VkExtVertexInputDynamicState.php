<?php

namespace iggyvolz\vulkan\ext;

class VkExtVertexInputDynamicState
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $vertexBindingDescriptionCount
     * @param \iggyvolz\vulkan\struct\VkVertexInputBindingDescription2EXT $pVertexBindingDescriptions
     * @param int $vertexAttributeDescriptionCount
     * @param \iggyvolz\vulkan\struct\VkVertexInputAttributeDescription2EXT $pVertexAttributeDescriptions
     * @return void
     */
    public function vkCmdSetVertexInputEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $vertexBindingDescriptionCount,
        \iggyvolz\vulkan\struct\VkVertexInputBindingDescription2EXT $pVertexBindingDescriptions,
        int $vertexAttributeDescriptionCount,
        \iggyvolz\vulkan\struct\VkVertexInputAttributeDescription2EXT $pVertexAttributeDescriptions,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $vertexBindingDescriptionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $vertexBindingDescriptionCount = $cValue;
        $phpValue = $pVertexBindingDescriptions;
        // const VkVertexInputBindingDescription2EXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pVertexBindingDescriptions = $cValue;
        $phpValue = $vertexAttributeDescriptionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $vertexAttributeDescriptionCount = $cValue;
        $phpValue = $pVertexAttributeDescriptions;
        // const VkVertexInputAttributeDescription2EXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pVertexAttributeDescriptions = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetVertexInputEXT", $commandBuffer, $vertexBindingDescriptionCount, $pVertexBindingDescriptions, $vertexAttributeDescriptionCount, $pVertexAttributeDescriptions);
    }
}
