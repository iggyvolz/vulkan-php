<?php

namespace iggyvolz\vulkan\ext;

class VkNvClipSpaceWScaling
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstViewport
     * @param int $viewportCount
     * @param \iggyvolz\vulkan\struct\VkViewportWScalingNV $pViewportWScalings
     * @return void
     */
    public function vkCmdSetViewportWScalingNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        \iggyvolz\vulkan\struct\VkViewportWScalingNV $pViewportWScalings,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstViewport;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstViewport = $cValue;
        $phpValue = $viewportCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $viewportCount = $cValue;
        $phpValue = $pViewportWScalings;
        // const VkViewportWScalingNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pViewportWScalings = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetViewportWScalingNV", $commandBuffer, $firstViewport, $viewportCount, $pViewportWScalings);
    }
}
