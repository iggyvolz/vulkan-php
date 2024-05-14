<?php

namespace iggyvolz\vulkan\ext;

class VkKhrSynchronization2
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stage
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer
     * @param int $dstOffset
     * @param int $marker
     * @return void
     */
    public function vkCmdWriteBufferMarker2AMD(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $stage,
        \iggyvolz\vulkan\struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $marker,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $stage;
        // VkPipelineStageFlags2 => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stage = $cValue;
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
        $cValue = $this->vulkan->call("vkCmdWriteBufferMarker2AMD", $commandBuffer, $stage, $dstBuffer, $dstOffset, $marker);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount
     */
    public function vkGetQueueCheckpointData2NV(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount,
    ) {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $pCheckpointDataCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pCheckpointDataCount = $cValue;
    }
}
