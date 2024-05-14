<?php

namespace iggyvolz\vulkan\ext;

class VkNvMeshShader
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $taskCount
     * @param int $firstTask
     * @return void
     */
    public function vkCmdDrawMeshTasksNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $taskCount,
        int $firstTask,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $taskCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $taskCount = $cValue;
        $phpValue = $firstTask;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstTask = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawMeshTasksNV", $commandBuffer, $taskCount, $firstTask);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param int $drawCount
     * @param int $stride
     * @return void
     */
    public function vkCmdDrawMeshTasksIndirectNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
        int $drawCount,
        int $stride,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $offset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $phpValue = $drawCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $drawCount = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawMeshTasksIndirectNV", $commandBuffer, $buffer, $offset, $drawCount, $stride);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param \iggyvolz\vulkan\struct\VkBuffer $countBuffer
     * @param int $countBufferOffset
     * @param int $maxDrawCount
     * @param int $stride
     * @return void
     */
    public function vkCmdDrawMeshTasksIndirectCountNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
        \iggyvolz\vulkan\struct\VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $offset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $phpValue = $countBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $countBuffer = $cValue;
        $phpValue = $countBufferOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $countBufferOffset = $cValue;
        $phpValue = $maxDrawCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $maxDrawCount = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawMeshTasksIndirectCountNV", $commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset, $maxDrawCount, $stride);
    }
}
