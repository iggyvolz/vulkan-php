<?php

namespace iggyvolz\vulkan\ext;

class VkHuaweiInvocationMask
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkImageView $imageView
     * @param \iggyvolz\vulkan\enum\VkImageLayout $imageLayout
     * @return void
     */
    public function vkCmdBindInvocationMaskHUAWEI(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkImageView $imageView,
        \iggyvolz\vulkan\enum\VkImageLayout $imageLayout,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $imageView;
        // VkImageView => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $imageView = $cValue;
        $phpValue = $imageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $imageLayout = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindInvocationMaskHUAWEI", $commandBuffer, $imageView, $imageLayout);
    }
}
