<?php

namespace iggyvolz\vulkan\ext;

class VkExtMeshShader
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $groupCountX
     * @param int $groupCountY
     * @param int $groupCountZ
     * @return void
     */
    public function vkCmdDrawMeshTasksEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $groupCountX;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupCountX = $cValue;
        $phpValue = $groupCountY;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupCountY = $cValue;
        $phpValue = $groupCountZ;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupCountZ = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawMeshTasksEXT", $commandBuffer, $groupCountX, $groupCountY, $groupCountZ);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param int $drawCount
     * @param int $stride
     * @return void
     */
    public function vkCmdDrawMeshTasksIndirectEXT(
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
        $cValue = $this->vulkan->call("vkCmdDrawMeshTasksIndirectEXT", $commandBuffer, $buffer, $offset, $drawCount, $stride);
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
    public function vkCmdDrawMeshTasksIndirectCountEXT(
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
        $cValue = $this->vulkan->call("vkCmdDrawMeshTasksIndirectCountEXT", $commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset, $maxDrawCount, $stride);
    }
}
