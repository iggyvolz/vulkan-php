<?php

namespace iggyvolz\vulkan\ext;

class VkExtAttachmentFeedbackLoopDynamicState
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkImageAspectFlagBits> $aspectMask
     * @return void
     */
    public function vkCmdSetAttachmentFeedbackLoopEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $aspectMask,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $aspectMask;
        // VkImageAspectFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $aspectMask = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetAttachmentFeedbackLoopEnableEXT", $commandBuffer, $aspectMask);
    }
}
