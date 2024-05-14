<?php

namespace iggyvolz\vulkan\ext;

class VkAmdBufferMarker
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer
     * @param int $dstOffset
     * @param int $marker
     * @return void
     */
    public function vkCmdWriteBufferMarkerAMD(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage,
        \iggyvolz\vulkan\struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $marker,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pipelineStage;
        // VkPipelineStageFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $pipelineStage = $cValue;
        $phpValue = $dstBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstBuffer = $cValue;
        $phpValue = $dstOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dstOffset = $cValue;
        $phpValue = $marker;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $marker = $cValue;
        $cValue = $this->vulkan->call("vkCmdWriteBufferMarkerAMD", $commandBuffer, $pipelineStage, $dstBuffer, $dstOffset, $marker);
    }
}
