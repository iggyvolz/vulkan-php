<?php

namespace iggyvolz\vulkan\ext;

class VkExtDiscardRectangles
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstDiscardRectangle
     * @param int $discardRectangleCount
     * @param \iggyvolz\vulkan\struct\VkRect2D $pDiscardRectangles
     * @return void
     */
    public function vkCmdSetDiscardRectangleEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstDiscardRectangle,
        int $discardRectangleCount,
        \iggyvolz\vulkan\struct\VkRect2D $pDiscardRectangles,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstDiscardRectangle;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstDiscardRectangle = $cValue;
        $phpValue = $discardRectangleCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $discardRectangleCount = $cValue;
        $phpValue = $pDiscardRectangles;
        // const VkRect2D* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDiscardRectangles = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDiscardRectangleEXT", $commandBuffer, $firstDiscardRectangle, $discardRectangleCount, $pDiscardRectangles);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $discardRectangleEnable
     * @return void
     */
    public function vkCmdSetDiscardRectangleEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $discardRectangleEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $discardRectangleEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $discardRectangleEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDiscardRectangleEnableEXT", $commandBuffer, $discardRectangleEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT $discardRectangleMode
     * @return void
     */
    public function vkCmdSetDiscardRectangleModeEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT $discardRectangleMode,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $discardRectangleMode;
        // VkDiscardRectangleModeEXT => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $discardRectangleMode = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDiscardRectangleModeEXT", $commandBuffer, $discardRectangleMode);
    }
}
