<?php

namespace iggyvolz\vulkan\ext;

class VkNvScissorExclusive
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstExclusiveScissor
     * @param int $exclusiveScissorCount
     * @param \iggyvolz\vulkan\struct\VkRect2D $pExclusiveScissors
     * @return void
     */
    public function vkCmdSetExclusiveScissorNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstExclusiveScissor,
        int $exclusiveScissorCount,
        \iggyvolz\vulkan\struct\VkRect2D $pExclusiveScissors,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstExclusiveScissor;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstExclusiveScissor = $cValue;
        $phpValue = $exclusiveScissorCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $exclusiveScissorCount = $cValue;
        $phpValue = $pExclusiveScissors;
        // const VkRect2D* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pExclusiveScissors = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetExclusiveScissorNV", $commandBuffer, $firstExclusiveScissor, $exclusiveScissorCount, $pExclusiveScissors);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstExclusiveScissor
     * @param int $exclusiveScissorCount
     * @param \iggyvolz\vulkan\util\Pointer $pExclusiveScissorEnables
     * @return void
     */
    public function vkCmdSetExclusiveScissorEnableNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstExclusiveScissor,
        int $exclusiveScissorCount,
        \iggyvolz\vulkan\util\Pointer $pExclusiveScissorEnables,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstExclusiveScissor;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstExclusiveScissor = $cValue;
        $phpValue = $exclusiveScissorCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $exclusiveScissorCount = $cValue;
        $phpValue = $pExclusiveScissorEnables;
        // const VkBool32* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pExclusiveScissorEnables = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetExclusiveScissorEnableNV", $commandBuffer, $firstExclusiveScissor, $exclusiveScissorCount, $pExclusiveScissorEnables);
    }
}
