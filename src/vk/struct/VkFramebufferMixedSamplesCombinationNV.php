<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFramebufferMixedSamplesCombinationNV
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
        null|\iggyvolz\vulkan\enum\VkCoverageReductionModeNV $coverageReductionMode = null,
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $rasterizationSamples = null,
        mixed $depthStencilSamples = null,
        mixed $colorSamples = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFramebufferMixedSamplesCombinationNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($coverageReductionMode)) $self->setCoverageReductionMode($coverageReductionMode);
        if(!is_null($rasterizationSamples)) $self->setRasterizationSamples($rasterizationSamples);
        if(!is_null($depthStencilSamples)) $self->setDepthStencilSamples($depthStencilSamples);
        if(!is_null($colorSamples)) $self->setColorSamples($colorSamples);
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
     * VkCoverageReductionModeNV/
     */
    public function getCoverageReductionMode(): \iggyvolz\vulkan\enum\VkCoverageReductionModeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->coverageReductionMode;
        $phpValue = \iggyvolz\vulkan\enum\VkCoverageReductionModeNV::from($cValue);
        return $phpValue;
    }

    public function setCoverageReductionMode(\iggyvolz\vulkan\enum\VkCoverageReductionModeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->coverageReductionMode = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getRasterizationSamples(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rasterizationSamples;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setRasterizationSamples(\iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->rasterizationSamples = $cValue;
    }

    /**
     * void* /
     */
    public function getDepthStencilSamples(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthStencilSamples;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDepthStencilSamples(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->depthStencilSamples = $cValue;
    }

    /**
     * void* /
     */
    public function getColorSamples(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->colorSamples;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setColorSamples(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->colorSamples = $cValue;
    }
}
