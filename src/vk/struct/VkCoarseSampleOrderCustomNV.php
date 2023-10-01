<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCoarseSampleOrderCustomNV
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
        null|\iggyvolz\vulkan\enum\VkShadingRatePaletteEntryNV $shadingRate = null,
        null|int $sampleCount = null,
        null|int $sampleLocationCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSampleLocations = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCoarseSampleOrderCustomNV', false), $vulkan->ffi);
        if(!is_null($shadingRate)) $self->setShadingRate($shadingRate);
        if(!is_null($sampleCount)) $self->setSampleCount($sampleCount);
        if(!is_null($sampleLocationCount)) $self->setSampleLocationCount($sampleLocationCount);
        if(!is_null($pSampleLocations)) $self->setPSampleLocations($pSampleLocations);
        return $self;
    }

    /**
     * VkShadingRatePaletteEntryNV/
     */
    public function getShadingRate(): \iggyvolz\vulkan\enum\VkShadingRatePaletteEntryNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shadingRate;
        $phpValue = \iggyvolz\vulkan\enum\VkShadingRatePaletteEntryNV::from($cValue);
        return $phpValue;
    }

    public function setShadingRate(\iggyvolz\vulkan\enum\VkShadingRatePaletteEntryNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->shadingRate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampleCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sampleCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSampleCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sampleCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampleLocationCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sampleLocationCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSampleLocationCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sampleLocationCount = $cValue;
    }

    /**
     * VkCoarseSampleLocationNV* /
     */
    public function getPSampleLocations(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSampleLocations;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkCoarseSampleLocationNV', $cValue, $ffi);
        return $phpValue;
    }

    public function setPSampleLocations(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSampleLocations = $cValue;
    }
}
