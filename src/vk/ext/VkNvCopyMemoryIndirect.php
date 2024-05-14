<?php

namespace iggyvolz\vulkan\ext;

class VkNvCopyMemoryIndirect
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $copyBufferAddress
     * @param int $copyCount
     * @param int $stride
     * @return void
     */
    public function vkCmdCopyMemoryIndirectNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $copyBufferAddress,
        int $copyCount,
        int $stride,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $copyBufferAddress;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $copyBufferAddress = $cValue;
        $phpValue = $copyCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $copyCount = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyMemoryIndirectNV", $commandBuffer, $copyBufferAddress, $copyCount, $stride);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $copyBufferAddress
     * @param int $copyCount
     * @param int $stride
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout
     * @param \iggyvolz\vulkan\struct\VkImageSubresourceLayers $pImageSubresources
     * @return void
     */
    public function vkCmdCopyMemoryToImageIndirectNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $copyBufferAddress,
        int $copyCount,
        int $stride,
        \iggyvolz\vulkan\struct\VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        \iggyvolz\vulkan\struct\VkImageSubresourceLayers $pImageSubresources,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $copyBufferAddress;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $copyBufferAddress = $cValue;
        $phpValue = $copyCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $copyCount = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $phpValue = $dstImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstImage = $cValue;
        $phpValue = $dstImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $dstImageLayout = $cValue;
        $phpValue = $pImageSubresources;
        // const VkImageSubresourceLayers* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImageSubresources = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyMemoryToImageIndirectNV", $commandBuffer, $copyBufferAddress, $copyCount, $stride, $dstImage, $dstImageLayout, $pImageSubresources);
    }
}
