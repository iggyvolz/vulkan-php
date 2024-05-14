<?php

namespace iggyvolz\vulkan\ext;

class VkExtExtendedDynamicState2
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $patchControlPoints
     * @return void
     */
    public function vkCmdSetPatchControlPointsEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $patchControlPoints,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $patchControlPoints;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $patchControlPoints = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetPatchControlPointsEXT", $commandBuffer, $patchControlPoints);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkLogicOp $logicOp
     * @return void
     */
    public function vkCmdSetLogicOpEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkLogicOp $logicOp,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $logicOp;
        // VkLogicOp => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $logicOp = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetLogicOpEXT", $commandBuffer, $logicOp);
    }
}
