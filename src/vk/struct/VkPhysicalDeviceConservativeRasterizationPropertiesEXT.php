<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceConservativeRasterizationPropertiesEXT
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|float $primitiveOverestimationSize = null,
        null|float $maxExtraPrimitiveOverestimationSize = null,
        null|float $extraPrimitiveOverestimationSizeGranularity = null,
        null|bool $primitiveUnderestimation = null,
        null|bool $conservativePointAndLineRasterization = null,
        null|bool $degenerateTrianglesRasterized = null,
        null|bool $degenerateLinesRasterized = null,
        null|bool $fullyCoveredFragmentShaderInputVariable = null,
        null|bool $conservativeRasterizationPostDepthCoverage = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceConservativeRasterizationPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($primitiveOverestimationSize)) $self->setPrimitiveOverestimationSize($primitiveOverestimationSize);
        if(!is_null($maxExtraPrimitiveOverestimationSize)) $self->setMaxExtraPrimitiveOverestimationSize($maxExtraPrimitiveOverestimationSize);
        if(!is_null($extraPrimitiveOverestimationSizeGranularity)) $self->setExtraPrimitiveOverestimationSizeGranularity($extraPrimitiveOverestimationSizeGranularity);
        if(!is_null($primitiveUnderestimation)) $self->setPrimitiveUnderestimation($primitiveUnderestimation);
        if(!is_null($conservativePointAndLineRasterization)) $self->setConservativePointAndLineRasterization($conservativePointAndLineRasterization);
        if(!is_null($degenerateTrianglesRasterized)) $self->setDegenerateTrianglesRasterized($degenerateTrianglesRasterized);
        if(!is_null($degenerateLinesRasterized)) $self->setDegenerateLinesRasterized($degenerateLinesRasterized);
        if(!is_null($fullyCoveredFragmentShaderInputVariable)) $self->setFullyCoveredFragmentShaderInputVariable($fullyCoveredFragmentShaderInputVariable);
        if(!is_null($conservativeRasterizationPostDepthCoverage)) $self->setConservativeRasterizationPostDepthCoverage($conservativeRasterizationPostDepthCoverage);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * float/
     */
    public function getPrimitiveOverestimationSize(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->primitiveOverestimationSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPrimitiveOverestimationSize(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->primitiveOverestimationSize = $cValue;
    }

    /**
     * float/
     */
    public function getMaxExtraPrimitiveOverestimationSize(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxExtraPrimitiveOverestimationSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxExtraPrimitiveOverestimationSize(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxExtraPrimitiveOverestimationSize = $cValue;
    }

    /**
     * float/
     */
    public function getExtraPrimitiveOverestimationSizeGranularity(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->extraPrimitiveOverestimationSizeGranularity;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setExtraPrimitiveOverestimationSizeGranularity(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->extraPrimitiveOverestimationSizeGranularity = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrimitiveUnderestimation(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->primitiveUnderestimation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitiveUnderestimation(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitiveUnderestimation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getConservativePointAndLineRasterization(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->conservativePointAndLineRasterization;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setConservativePointAndLineRasterization(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->conservativePointAndLineRasterization = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDegenerateTrianglesRasterized(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->degenerateTrianglesRasterized;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDegenerateTrianglesRasterized(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->degenerateTrianglesRasterized = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDegenerateLinesRasterized(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->degenerateLinesRasterized;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDegenerateLinesRasterized(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->degenerateLinesRasterized = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFullyCoveredFragmentShaderInputVariable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fullyCoveredFragmentShaderInputVariable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFullyCoveredFragmentShaderInputVariable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fullyCoveredFragmentShaderInputVariable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getConservativeRasterizationPostDepthCoverage(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->conservativeRasterizationPostDepthCoverage;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setConservativeRasterizationPostDepthCoverage(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->conservativeRasterizationPostDepthCoverage = $cValue;
    }
}
