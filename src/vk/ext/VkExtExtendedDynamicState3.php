<?php

namespace iggyvolz\vulkan\ext;

class VkExtExtendedDynamicState3
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkTessellationDomainOrigin $domainOrigin
     * @return void
     */
    public function vkCmdSetTessellationDomainOriginEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkTessellationDomainOrigin $domainOrigin,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $domainOrigin;
        // VkTessellationDomainOrigin => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $domainOrigin = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetTessellationDomainOriginEXT", $commandBuffer, $domainOrigin);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $depthClampEnable
     * @return void
     */
    public function vkCmdSetDepthClampEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $depthClampEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $depthClampEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $depthClampEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthClampEnableEXT", $commandBuffer, $depthClampEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPolygonMode $polygonMode
     * @return void
     */
    public function vkCmdSetPolygonModeEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPolygonMode $polygonMode,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $polygonMode;
        // VkPolygonMode => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $polygonMode = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetPolygonModeEXT", $commandBuffer, $polygonMode);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkSampleCountFlagBits $rasterizationSamples
     * @return void
     */
    public function vkCmdSetRasterizationSamplesEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $rasterizationSamples,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $rasterizationSamples;
        // VkSampleCountFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $rasterizationSamples = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetRasterizationSamplesEXT", $commandBuffer, $rasterizationSamples);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples
     * @param \iggyvolz\vulkan\util\Pointer $pSampleMask
     * @return void
     */
    public function vkCmdSetSampleMaskEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples,
        \iggyvolz\vulkan\util\Pointer $pSampleMask,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $samples;
        // VkSampleCountFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $samples = $cValue;
        $phpValue = $pSampleMask;
        // const VkSampleMask* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pSampleMask = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetSampleMaskEXT", $commandBuffer, $samples, $pSampleMask);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $alphaToCoverageEnable
     * @return void
     */
    public function vkCmdSetAlphaToCoverageEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $alphaToCoverageEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $alphaToCoverageEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $alphaToCoverageEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetAlphaToCoverageEnableEXT", $commandBuffer, $alphaToCoverageEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $alphaToOneEnable
     * @return void
     */
    public function vkCmdSetAlphaToOneEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $alphaToOneEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $alphaToOneEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $alphaToOneEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetAlphaToOneEnableEXT", $commandBuffer, $alphaToOneEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $logicOpEnable
     * @return void
     */
    public function vkCmdSetLogicOpEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $logicOpEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $logicOpEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $logicOpEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetLogicOpEnableEXT", $commandBuffer, $logicOpEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstAttachment
     * @param int $attachmentCount
     * @param \iggyvolz\vulkan\util\Pointer $pColorBlendEnables
     * @return void
     */
    public function vkCmdSetColorBlendEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstAttachment,
        int $attachmentCount,
        \iggyvolz\vulkan\util\Pointer $pColorBlendEnables,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstAttachment;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstAttachment = $cValue;
        $phpValue = $attachmentCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $attachmentCount = $cValue;
        $phpValue = $pColorBlendEnables;
        // const VkBool32* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pColorBlendEnables = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetColorBlendEnableEXT", $commandBuffer, $firstAttachment, $attachmentCount, $pColorBlendEnables);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstAttachment
     * @param int $attachmentCount
     * @param \iggyvolz\vulkan\struct\VkColorBlendEquationEXT $pColorBlendEquations
     * @return void
     */
    public function vkCmdSetColorBlendEquationEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstAttachment,
        int $attachmentCount,
        \iggyvolz\vulkan\struct\VkColorBlendEquationEXT $pColorBlendEquations,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstAttachment;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstAttachment = $cValue;
        $phpValue = $attachmentCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $attachmentCount = $cValue;
        $phpValue = $pColorBlendEquations;
        // const VkColorBlendEquationEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pColorBlendEquations = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetColorBlendEquationEXT", $commandBuffer, $firstAttachment, $attachmentCount, $pColorBlendEquations);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstAttachment
     * @param int $attachmentCount
     * @param \iggyvolz\vulkan\util\Pointer $pColorWriteMasks
     * @return void
     */
    public function vkCmdSetColorWriteMaskEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstAttachment,
        int $attachmentCount,
        \iggyvolz\vulkan\util\Pointer $pColorWriteMasks,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstAttachment;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstAttachment = $cValue;
        $phpValue = $attachmentCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $attachmentCount = $cValue;
        $phpValue = $pColorWriteMasks;
        // const VkColorComponentFlags* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pColorWriteMasks = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetColorWriteMaskEXT", $commandBuffer, $firstAttachment, $attachmentCount, $pColorWriteMasks);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $rasterizationStream
     * @return void
     */
    public function vkCmdSetRasterizationStreamEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $rasterizationStream,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $rasterizationStream;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $rasterizationStream = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetRasterizationStreamEXT", $commandBuffer, $rasterizationStream);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT $conservativeRasterizationMode
     * @return void
     */
    public function vkCmdSetConservativeRasterizationModeEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT $conservativeRasterizationMode,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $conservativeRasterizationMode;
        // VkConservativeRasterizationModeEXT => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $conservativeRasterizationMode = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetConservativeRasterizationModeEXT", $commandBuffer, $conservativeRasterizationMode);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param float $extraPrimitiveOverestimationSize
     * @return void
     */
    public function vkCmdSetExtraPrimitiveOverestimationSizeEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        float $extraPrimitiveOverestimationSize,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $extraPrimitiveOverestimationSize;
        // float => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $extraPrimitiveOverestimationSize = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetExtraPrimitiveOverestimationSizeEXT", $commandBuffer, $extraPrimitiveOverestimationSize);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $depthClipEnable
     * @return void
     */
    public function vkCmdSetDepthClipEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $depthClipEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $depthClipEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $depthClipEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthClipEnableEXT", $commandBuffer, $depthClipEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $sampleLocationsEnable
     * @return void
     */
    public function vkCmdSetSampleLocationsEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $sampleLocationsEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $sampleLocationsEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $sampleLocationsEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetSampleLocationsEnableEXT", $commandBuffer, $sampleLocationsEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstAttachment
     * @param int $attachmentCount
     * @param \iggyvolz\vulkan\struct\VkColorBlendAdvancedEXT $pColorBlendAdvanced
     * @return void
     */
    public function vkCmdSetColorBlendAdvancedEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstAttachment,
        int $attachmentCount,
        \iggyvolz\vulkan\struct\VkColorBlendAdvancedEXT $pColorBlendAdvanced,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstAttachment;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstAttachment = $cValue;
        $phpValue = $attachmentCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $attachmentCount = $cValue;
        $phpValue = $pColorBlendAdvanced;
        // const VkColorBlendAdvancedEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pColorBlendAdvanced = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetColorBlendAdvancedEXT", $commandBuffer, $firstAttachment, $attachmentCount, $pColorBlendAdvanced);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkProvokingVertexModeEXT $provokingVertexMode
     * @return void
     */
    public function vkCmdSetProvokingVertexModeEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkProvokingVertexModeEXT $provokingVertexMode,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $provokingVertexMode;
        // VkProvokingVertexModeEXT => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $provokingVertexMode = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetProvokingVertexModeEXT", $commandBuffer, $provokingVertexMode);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param mixed $lineRasterizationMode
     * @return void
     */
    public function vkCmdSetLineRasterizationModeEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        mixed $lineRasterizationMode,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $lineRasterizationMode;
        // VkLineRasterizationModeEXT => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - VkLineRasterizationModeEXT!");
        $lineRasterizationMode = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetLineRasterizationModeEXT", $commandBuffer, $lineRasterizationMode);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $stippledLineEnable
     * @return void
     */
    public function vkCmdSetLineStippleEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $stippledLineEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $stippledLineEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $stippledLineEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetLineStippleEnableEXT", $commandBuffer, $stippledLineEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $negativeOneToOne
     * @return void
     */
    public function vkCmdSetDepthClipNegativeOneToOneEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $negativeOneToOne,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $negativeOneToOne;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $negativeOneToOne = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthClipNegativeOneToOneEXT", $commandBuffer, $negativeOneToOne);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $viewportWScalingEnable
     * @return void
     */
    public function vkCmdSetViewportWScalingEnableNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $viewportWScalingEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $viewportWScalingEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $viewportWScalingEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetViewportWScalingEnableNV", $commandBuffer, $viewportWScalingEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstViewport
     * @param int $viewportCount
     * @param \iggyvolz\vulkan\struct\VkViewportSwizzleNV $pViewportSwizzles
     * @return void
     */
    public function vkCmdSetViewportSwizzleNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        \iggyvolz\vulkan\struct\VkViewportSwizzleNV $pViewportSwizzles,
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
        $phpValue = $pViewportSwizzles;
        // const VkViewportSwizzleNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pViewportSwizzles = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetViewportSwizzleNV", $commandBuffer, $firstViewport, $viewportCount, $pViewportSwizzles);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $coverageToColorEnable
     * @return void
     */
    public function vkCmdSetCoverageToColorEnableNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $coverageToColorEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $coverageToColorEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $coverageToColorEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCoverageToColorEnableNV", $commandBuffer, $coverageToColorEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $coverageToColorLocation
     * @return void
     */
    public function vkCmdSetCoverageToColorLocationNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $coverageToColorLocation,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $coverageToColorLocation;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $coverageToColorLocation = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCoverageToColorLocationNV", $commandBuffer, $coverageToColorLocation);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkCoverageModulationModeNV $coverageModulationMode
     * @return void
     */
    public function vkCmdSetCoverageModulationModeNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkCoverageModulationModeNV $coverageModulationMode,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $coverageModulationMode;
        // VkCoverageModulationModeNV => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $coverageModulationMode = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCoverageModulationModeNV", $commandBuffer, $coverageModulationMode);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $coverageModulationTableEnable
     * @return void
     */
    public function vkCmdSetCoverageModulationTableEnableNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $coverageModulationTableEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $coverageModulationTableEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $coverageModulationTableEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCoverageModulationTableEnableNV", $commandBuffer, $coverageModulationTableEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $coverageModulationTableCount
     * @param \iggyvolz\vulkan\util\Pointer $pCoverageModulationTable
     * @return void
     */
    public function vkCmdSetCoverageModulationTableNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $coverageModulationTableCount,
        \iggyvolz\vulkan\util\Pointer $pCoverageModulationTable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $coverageModulationTableCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $coverageModulationTableCount = $cValue;
        $phpValue = $pCoverageModulationTable;
        // const float* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pCoverageModulationTable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCoverageModulationTableNV", $commandBuffer, $coverageModulationTableCount, $pCoverageModulationTable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $shadingRateImageEnable
     * @return void
     */
    public function vkCmdSetShadingRateImageEnableNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $shadingRateImageEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $shadingRateImageEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $shadingRateImageEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetShadingRateImageEnableNV", $commandBuffer, $shadingRateImageEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkCoverageReductionModeNV $coverageReductionMode
     * @return void
     */
    public function vkCmdSetCoverageReductionModeNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkCoverageReductionModeNV $coverageReductionMode,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $coverageReductionMode;
        // VkCoverageReductionModeNV => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $coverageReductionMode = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCoverageReductionModeNV", $commandBuffer, $coverageReductionMode);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $representativeFragmentTestEnable
     * @return void
     */
    public function vkCmdSetRepresentativeFragmentTestEnableNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $representativeFragmentTestEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $representativeFragmentTestEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $representativeFragmentTestEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetRepresentativeFragmentTestEnableNV", $commandBuffer, $representativeFragmentTestEnable);
    }
}
