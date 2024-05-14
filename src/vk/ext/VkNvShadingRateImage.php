<?php

namespace iggyvolz\vulkan\ext;

class VkNvShadingRateImage
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
    public function vkCmdBindShadingRateImageNV(
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
        $cValue = $this->vulkan->call("vkCmdBindShadingRateImageNV", $commandBuffer, $imageView, $imageLayout);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstViewport
     * @param int $viewportCount
     * @param \iggyvolz\vulkan\struct\VkShadingRatePaletteNV $pShadingRatePalettes
     * @return void
     */
    public function vkCmdSetViewportShadingRatePaletteNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        \iggyvolz\vulkan\struct\VkShadingRatePaletteNV $pShadingRatePalettes,
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
        $phpValue = $pShadingRatePalettes;
        // const VkShadingRatePaletteNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pShadingRatePalettes = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetViewportShadingRatePaletteNV", $commandBuffer, $firstViewport, $viewportCount, $pShadingRatePalettes);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV $sampleOrderType
     * @param int $customSampleOrderCount
     * @param \iggyvolz\vulkan\struct\VkCoarseSampleOrderCustomNV $pCustomSampleOrders
     * @return void
     */
    public function vkCmdSetCoarseSampleOrderNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV $sampleOrderType,
        int $customSampleOrderCount,
        \iggyvolz\vulkan\struct\VkCoarseSampleOrderCustomNV $pCustomSampleOrders,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $sampleOrderType;
        // VkCoarseSampleOrderTypeNV => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $sampleOrderType = $cValue;
        $phpValue = $customSampleOrderCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $customSampleOrderCount = $cValue;
        $phpValue = $pCustomSampleOrders;
        // const VkCoarseSampleOrderCustomNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCustomSampleOrders = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCoarseSampleOrderNV", $commandBuffer, $sampleOrderType, $customSampleOrderCount, $pCustomSampleOrders);
    }
}
