<?php

namespace iggyvolz\vulkan\ext;

class VkHuaweiClusterCullingShader
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
    public function vkCmdDrawClusterHUAWEI(
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
        $cValue = $this->vulkan->call("vkCmdDrawClusterHUAWEI", $commandBuffer, $groupCountX, $groupCountY, $groupCountZ);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @return void
     */
    public function vkCmdDrawClusterIndirectHUAWEI(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
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
        $cValue = $this->vulkan->call("vkCmdDrawClusterIndirectHUAWEI", $commandBuffer, $buffer, $offset);
    }
}
