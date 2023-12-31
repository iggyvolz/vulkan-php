<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMaintenance5PropertiesKHR
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $earlyFragmentMultisampleCoverageAfterSampleCounting = null,
        null|bool $earlyFragmentSampleMaskTestBeforeSampleCounting = null,
        null|bool $depthStencilSwizzleOneSupport = null,
        null|bool $polygonModePointSize = null,
        null|bool $nonStrictSinglePixelWideLinesUseParallelogram = null,
        null|bool $nonStrictWideLinesUseParallelogram = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMaintenance5PropertiesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($earlyFragmentMultisampleCoverageAfterSampleCounting)) $self->setEarlyFragmentMultisampleCoverageAfterSampleCounting($earlyFragmentMultisampleCoverageAfterSampleCounting);
        if(!is_null($earlyFragmentSampleMaskTestBeforeSampleCounting)) $self->setEarlyFragmentSampleMaskTestBeforeSampleCounting($earlyFragmentSampleMaskTestBeforeSampleCounting);
        if(!is_null($depthStencilSwizzleOneSupport)) $self->setDepthStencilSwizzleOneSupport($depthStencilSwizzleOneSupport);
        if(!is_null($polygonModePointSize)) $self->setPolygonModePointSize($polygonModePointSize);
        if(!is_null($nonStrictSinglePixelWideLinesUseParallelogram)) $self->setNonStrictSinglePixelWideLinesUseParallelogram($nonStrictSinglePixelWideLinesUseParallelogram);
        if(!is_null($nonStrictWideLinesUseParallelogram)) $self->setNonStrictWideLinesUseParallelogram($nonStrictWideLinesUseParallelogram);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEarlyFragmentMultisampleCoverageAfterSampleCounting(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->earlyFragmentMultisampleCoverageAfterSampleCounting;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setEarlyFragmentMultisampleCoverageAfterSampleCounting(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->earlyFragmentMultisampleCoverageAfterSampleCounting = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEarlyFragmentSampleMaskTestBeforeSampleCounting(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->earlyFragmentSampleMaskTestBeforeSampleCounting;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setEarlyFragmentSampleMaskTestBeforeSampleCounting(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->earlyFragmentSampleMaskTestBeforeSampleCounting = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthStencilSwizzleOneSupport(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthStencilSwizzleOneSupport;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthStencilSwizzleOneSupport(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthStencilSwizzleOneSupport = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPolygonModePointSize(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->polygonModePointSize;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPolygonModePointSize(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->polygonModePointSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNonStrictSinglePixelWideLinesUseParallelogram(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->nonStrictSinglePixelWideLinesUseParallelogram;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setNonStrictSinglePixelWideLinesUseParallelogram(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->nonStrictSinglePixelWideLinesUseParallelogram = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNonStrictWideLinesUseParallelogram(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->nonStrictWideLinesUseParallelogram;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setNonStrictWideLinesUseParallelogram(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->nonStrictWideLinesUseParallelogram = $cValue;
    }
}
