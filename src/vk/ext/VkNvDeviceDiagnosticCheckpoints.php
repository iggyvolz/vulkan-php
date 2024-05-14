<?php

namespace iggyvolz\vulkan\ext;

class VkNvDeviceDiagnosticCheckpoints
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\util\Pointer $pCheckpointMarker
     * @return void
     */
    public function vkCmdSetCheckpointNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\util\Pointer $pCheckpointMarker,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pCheckpointMarker;
        // const void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pCheckpointMarker = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCheckpointNV", $commandBuffer, $pCheckpointMarker);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount
     */
    public function vkGetQueueCheckpointDataNV(
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
