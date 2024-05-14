<?php

namespace iggyvolz\vulkan\ext;

class VkKhrLineRasterization
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $lineStippleFactor
     * @param int $lineStipplePattern
     * @return void
     */
    public function vkCmdSetLineStippleKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $lineStippleFactor,
        int $lineStipplePattern,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $lineStippleFactor;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $lineStippleFactor = $cValue;
        $phpValue = $lineStipplePattern;
        // uint16_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $lineStipplePattern = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetLineStippleKHR", $commandBuffer, $lineStippleFactor, $lineStipplePattern);
    }
}
