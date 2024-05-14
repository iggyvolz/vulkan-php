<?php

namespace iggyvolz\vulkan\ext;

class VkExtConditionalRendering
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkConditionalRenderingBeginInfoEXT $pConditionalRenderingBegin
     * @return void
     */
    public function vkCmdBeginConditionalRenderingEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkConditionalRenderingBeginInfoEXT $pConditionalRenderingBegin,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pConditionalRenderingBegin;
        // const VkConditionalRenderingBeginInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pConditionalRenderingBegin = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginConditionalRenderingEXT", $commandBuffer, $pConditionalRenderingBegin);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @return void
     */
    public function vkCmdEndConditionalRenderingEXT(\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndConditionalRenderingEXT", $commandBuffer);
    }
}
