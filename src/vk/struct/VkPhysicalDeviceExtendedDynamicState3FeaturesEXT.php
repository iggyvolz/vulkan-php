<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceExtendedDynamicState3FeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "extendedDynamicState3TessellationDomainOrigin" => $this->getExtendedDynamicState3TessellationDomainOrigin(),
          "extendedDynamicState3DepthClampEnable" => $this->getExtendedDynamicState3DepthClampEnable(),
          "extendedDynamicState3PolygonMode" => $this->getExtendedDynamicState3PolygonMode(),
          "extendedDynamicState3RasterizationSamples" => $this->getExtendedDynamicState3RasterizationSamples(),
          "extendedDynamicState3SampleMask" => $this->getExtendedDynamicState3SampleMask(),
          "extendedDynamicState3AlphaToCoverageEnable" => $this->getExtendedDynamicState3AlphaToCoverageEnable(),
          "extendedDynamicState3AlphaToOneEnable" => $this->getExtendedDynamicState3AlphaToOneEnable(),
          "extendedDynamicState3LogicOpEnable" => $this->getExtendedDynamicState3LogicOpEnable(),
          "extendedDynamicState3ColorBlendEnable" => $this->getExtendedDynamicState3ColorBlendEnable(),
          "extendedDynamicState3ColorBlendEquation" => $this->getExtendedDynamicState3ColorBlendEquation(),
          "extendedDynamicState3ColorWriteMask" => $this->getExtendedDynamicState3ColorWriteMask(),
          "extendedDynamicState3RasterizationStream" => $this->getExtendedDynamicState3RasterizationStream(),
          "extendedDynamicState3ConservativeRasterizationMode" => $this->getExtendedDynamicState3ConservativeRasterizationMode(),
          "extendedDynamicState3ExtraPrimitiveOverestimationSize" => $this->getExtendedDynamicState3ExtraPrimitiveOverestimationSize(),
          "extendedDynamicState3DepthClipEnable" => $this->getExtendedDynamicState3DepthClipEnable(),
          "extendedDynamicState3SampleLocationsEnable" => $this->getExtendedDynamicState3SampleLocationsEnable(),
          "extendedDynamicState3ColorBlendAdvanced" => $this->getExtendedDynamicState3ColorBlendAdvanced(),
          "extendedDynamicState3ProvokingVertexMode" => $this->getExtendedDynamicState3ProvokingVertexMode(),
          "extendedDynamicState3LineRasterizationMode" => $this->getExtendedDynamicState3LineRasterizationMode(),
          "extendedDynamicState3LineStippleEnable" => $this->getExtendedDynamicState3LineStippleEnable(),
          "extendedDynamicState3DepthClipNegativeOneToOne" => $this->getExtendedDynamicState3DepthClipNegativeOneToOne(),
          "extendedDynamicState3ViewportWScalingEnable" => $this->getExtendedDynamicState3ViewportWScalingEnable(),
          "extendedDynamicState3ViewportSwizzle" => $this->getExtendedDynamicState3ViewportSwizzle(),
          "extendedDynamicState3CoverageToColorEnable" => $this->getExtendedDynamicState3CoverageToColorEnable(),
          "extendedDynamicState3CoverageToColorLocation" => $this->getExtendedDynamicState3CoverageToColorLocation(),
          "extendedDynamicState3CoverageModulationMode" => $this->getExtendedDynamicState3CoverageModulationMode(),
          "extendedDynamicState3CoverageModulationTableEnable" => $this->getExtendedDynamicState3CoverageModulationTableEnable(),
          "extendedDynamicState3CoverageModulationTable" => $this->getExtendedDynamicState3CoverageModulationTable(),
          "extendedDynamicState3CoverageReductionMode" => $this->getExtendedDynamicState3CoverageReductionMode(),
          "extendedDynamicState3RepresentativeFragmentTestEnable" => $this->getExtendedDynamicState3RepresentativeFragmentTestEnable(),
          "extendedDynamicState3ShadingRateImageEnable" => $this->getExtendedDynamicState3ShadingRateImageEnable(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $extendedDynamicState3TessellationDomainOrigin = null,
        null|bool $extendedDynamicState3DepthClampEnable = null,
        null|bool $extendedDynamicState3PolygonMode = null,
        null|bool $extendedDynamicState3RasterizationSamples = null,
        null|bool $extendedDynamicState3SampleMask = null,
        null|bool $extendedDynamicState3AlphaToCoverageEnable = null,
        null|bool $extendedDynamicState3AlphaToOneEnable = null,
        null|bool $extendedDynamicState3LogicOpEnable = null,
        null|bool $extendedDynamicState3ColorBlendEnable = null,
        null|bool $extendedDynamicState3ColorBlendEquation = null,
        null|bool $extendedDynamicState3ColorWriteMask = null,
        null|bool $extendedDynamicState3RasterizationStream = null,
        null|bool $extendedDynamicState3ConservativeRasterizationMode = null,
        null|bool $extendedDynamicState3ExtraPrimitiveOverestimationSize = null,
        null|bool $extendedDynamicState3DepthClipEnable = null,
        null|bool $extendedDynamicState3SampleLocationsEnable = null,
        null|bool $extendedDynamicState3ColorBlendAdvanced = null,
        null|bool $extendedDynamicState3ProvokingVertexMode = null,
        null|bool $extendedDynamicState3LineRasterizationMode = null,
        null|bool $extendedDynamicState3LineStippleEnable = null,
        null|bool $extendedDynamicState3DepthClipNegativeOneToOne = null,
        null|bool $extendedDynamicState3ViewportWScalingEnable = null,
        null|bool $extendedDynamicState3ViewportSwizzle = null,
        null|bool $extendedDynamicState3CoverageToColorEnable = null,
        null|bool $extendedDynamicState3CoverageToColorLocation = null,
        null|bool $extendedDynamicState3CoverageModulationMode = null,
        null|bool $extendedDynamicState3CoverageModulationTableEnable = null,
        null|bool $extendedDynamicState3CoverageModulationTable = null,
        null|bool $extendedDynamicState3CoverageReductionMode = null,
        null|bool $extendedDynamicState3RepresentativeFragmentTestEnable = null,
        null|bool $extendedDynamicState3ShadingRateImageEnable = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceExtendedDynamicState3FeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($extendedDynamicState3TessellationDomainOrigin)) $self->setExtendedDynamicState3TessellationDomainOrigin($extendedDynamicState3TessellationDomainOrigin);
        if(!is_null($extendedDynamicState3DepthClampEnable)) $self->setExtendedDynamicState3DepthClampEnable($extendedDynamicState3DepthClampEnable);
        if(!is_null($extendedDynamicState3PolygonMode)) $self->setExtendedDynamicState3PolygonMode($extendedDynamicState3PolygonMode);
        if(!is_null($extendedDynamicState3RasterizationSamples)) $self->setExtendedDynamicState3RasterizationSamples($extendedDynamicState3RasterizationSamples);
        if(!is_null($extendedDynamicState3SampleMask)) $self->setExtendedDynamicState3SampleMask($extendedDynamicState3SampleMask);
        if(!is_null($extendedDynamicState3AlphaToCoverageEnable)) $self->setExtendedDynamicState3AlphaToCoverageEnable($extendedDynamicState3AlphaToCoverageEnable);
        if(!is_null($extendedDynamicState3AlphaToOneEnable)) $self->setExtendedDynamicState3AlphaToOneEnable($extendedDynamicState3AlphaToOneEnable);
        if(!is_null($extendedDynamicState3LogicOpEnable)) $self->setExtendedDynamicState3LogicOpEnable($extendedDynamicState3LogicOpEnable);
        if(!is_null($extendedDynamicState3ColorBlendEnable)) $self->setExtendedDynamicState3ColorBlendEnable($extendedDynamicState3ColorBlendEnable);
        if(!is_null($extendedDynamicState3ColorBlendEquation)) $self->setExtendedDynamicState3ColorBlendEquation($extendedDynamicState3ColorBlendEquation);
        if(!is_null($extendedDynamicState3ColorWriteMask)) $self->setExtendedDynamicState3ColorWriteMask($extendedDynamicState3ColorWriteMask);
        if(!is_null($extendedDynamicState3RasterizationStream)) $self->setExtendedDynamicState3RasterizationStream($extendedDynamicState3RasterizationStream);
        if(!is_null($extendedDynamicState3ConservativeRasterizationMode)) $self->setExtendedDynamicState3ConservativeRasterizationMode($extendedDynamicState3ConservativeRasterizationMode);
        if(!is_null($extendedDynamicState3ExtraPrimitiveOverestimationSize)) $self->setExtendedDynamicState3ExtraPrimitiveOverestimationSize($extendedDynamicState3ExtraPrimitiveOverestimationSize);
        if(!is_null($extendedDynamicState3DepthClipEnable)) $self->setExtendedDynamicState3DepthClipEnable($extendedDynamicState3DepthClipEnable);
        if(!is_null($extendedDynamicState3SampleLocationsEnable)) $self->setExtendedDynamicState3SampleLocationsEnable($extendedDynamicState3SampleLocationsEnable);
        if(!is_null($extendedDynamicState3ColorBlendAdvanced)) $self->setExtendedDynamicState3ColorBlendAdvanced($extendedDynamicState3ColorBlendAdvanced);
        if(!is_null($extendedDynamicState3ProvokingVertexMode)) $self->setExtendedDynamicState3ProvokingVertexMode($extendedDynamicState3ProvokingVertexMode);
        if(!is_null($extendedDynamicState3LineRasterizationMode)) $self->setExtendedDynamicState3LineRasterizationMode($extendedDynamicState3LineRasterizationMode);
        if(!is_null($extendedDynamicState3LineStippleEnable)) $self->setExtendedDynamicState3LineStippleEnable($extendedDynamicState3LineStippleEnable);
        if(!is_null($extendedDynamicState3DepthClipNegativeOneToOne)) $self->setExtendedDynamicState3DepthClipNegativeOneToOne($extendedDynamicState3DepthClipNegativeOneToOne);
        if(!is_null($extendedDynamicState3ViewportWScalingEnable)) $self->setExtendedDynamicState3ViewportWScalingEnable($extendedDynamicState3ViewportWScalingEnable);
        if(!is_null($extendedDynamicState3ViewportSwizzle)) $self->setExtendedDynamicState3ViewportSwizzle($extendedDynamicState3ViewportSwizzle);
        if(!is_null($extendedDynamicState3CoverageToColorEnable)) $self->setExtendedDynamicState3CoverageToColorEnable($extendedDynamicState3CoverageToColorEnable);
        if(!is_null($extendedDynamicState3CoverageToColorLocation)) $self->setExtendedDynamicState3CoverageToColorLocation($extendedDynamicState3CoverageToColorLocation);
        if(!is_null($extendedDynamicState3CoverageModulationMode)) $self->setExtendedDynamicState3CoverageModulationMode($extendedDynamicState3CoverageModulationMode);
        if(!is_null($extendedDynamicState3CoverageModulationTableEnable)) $self->setExtendedDynamicState3CoverageModulationTableEnable($extendedDynamicState3CoverageModulationTableEnable);
        if(!is_null($extendedDynamicState3CoverageModulationTable)) $self->setExtendedDynamicState3CoverageModulationTable($extendedDynamicState3CoverageModulationTable);
        if(!is_null($extendedDynamicState3CoverageReductionMode)) $self->setExtendedDynamicState3CoverageReductionMode($extendedDynamicState3CoverageReductionMode);
        if(!is_null($extendedDynamicState3RepresentativeFragmentTestEnable)) $self->setExtendedDynamicState3RepresentativeFragmentTestEnable($extendedDynamicState3RepresentativeFragmentTestEnable);
        if(!is_null($extendedDynamicState3ShadingRateImageEnable)) $self->setExtendedDynamicState3ShadingRateImageEnable($extendedDynamicState3ShadingRateImageEnable);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3TessellationDomainOrigin(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3TessellationDomainOrigin;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3TessellationDomainOrigin(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3TessellationDomainOrigin = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3DepthClampEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3DepthClampEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3DepthClampEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3DepthClampEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3PolygonMode(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3PolygonMode;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3PolygonMode(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3PolygonMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3RasterizationSamples(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3RasterizationSamples;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3RasterizationSamples(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3RasterizationSamples = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3SampleMask(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3SampleMask;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3SampleMask(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3SampleMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3AlphaToCoverageEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3AlphaToCoverageEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3AlphaToCoverageEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3AlphaToCoverageEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3AlphaToOneEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3AlphaToOneEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3AlphaToOneEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3AlphaToOneEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3LogicOpEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3LogicOpEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3LogicOpEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3LogicOpEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ColorBlendEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ColorBlendEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ColorBlendEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ColorBlendEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ColorBlendEquation(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ColorBlendEquation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ColorBlendEquation(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ColorBlendEquation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ColorWriteMask(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ColorWriteMask;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ColorWriteMask(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ColorWriteMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3RasterizationStream(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3RasterizationStream;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3RasterizationStream(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3RasterizationStream = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ConservativeRasterizationMode(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ConservativeRasterizationMode;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ConservativeRasterizationMode(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ConservativeRasterizationMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ExtraPrimitiveOverestimationSize(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ExtraPrimitiveOverestimationSize;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ExtraPrimitiveOverestimationSize(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ExtraPrimitiveOverestimationSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3DepthClipEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3DepthClipEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3DepthClipEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3DepthClipEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3SampleLocationsEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3SampleLocationsEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3SampleLocationsEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3SampleLocationsEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ColorBlendAdvanced(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ColorBlendAdvanced;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ColorBlendAdvanced(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ColorBlendAdvanced = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ProvokingVertexMode(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ProvokingVertexMode;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ProvokingVertexMode(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ProvokingVertexMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3LineRasterizationMode(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3LineRasterizationMode;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3LineRasterizationMode(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3LineRasterizationMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3LineStippleEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3LineStippleEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3LineStippleEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3LineStippleEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3DepthClipNegativeOneToOne(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3DepthClipNegativeOneToOne;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3DepthClipNegativeOneToOne(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3DepthClipNegativeOneToOne = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ViewportWScalingEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ViewportWScalingEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ViewportWScalingEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ViewportWScalingEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ViewportSwizzle(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ViewportSwizzle;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ViewportSwizzle(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ViewportSwizzle = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3CoverageToColorEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3CoverageToColorEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3CoverageToColorEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3CoverageToColorEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3CoverageToColorLocation(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3CoverageToColorLocation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3CoverageToColorLocation(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3CoverageToColorLocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3CoverageModulationMode(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3CoverageModulationMode;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3CoverageModulationMode(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3CoverageModulationMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3CoverageModulationTableEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3CoverageModulationTableEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3CoverageModulationTableEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3CoverageModulationTableEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3CoverageModulationTable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3CoverageModulationTable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3CoverageModulationTable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3CoverageModulationTable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3CoverageReductionMode(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3CoverageReductionMode;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3CoverageReductionMode(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3CoverageReductionMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3RepresentativeFragmentTestEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3RepresentativeFragmentTestEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3RepresentativeFragmentTestEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3RepresentativeFragmentTestEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState3ShadingRateImageEnable(): bool
    {
        $cValue = $this->cdata->extendedDynamicState3ShadingRateImageEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState3ShadingRateImageEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState3ShadingRateImageEnable = $cValue;
    }
}
