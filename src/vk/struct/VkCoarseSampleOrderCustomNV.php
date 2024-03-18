<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCoarseSampleOrderCustomNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "shadingRate" => $this->getShadingRate(),
          "sampleCount" => $this->getSampleCount(),
          "sampleLocationCount" => $this->getSampleLocationCount(),
          "pSampleLocations" => $this->getPSampleLocations(),
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
        null|\iggyvolz\vulkan\enum\VkShadingRatePaletteEntryNV $shadingRate = null,
        null|int $sampleCount = null,
        null|int $sampleLocationCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSampleLocations = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCoarseSampleOrderCustomNV', false));
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
        $cValue = $this->cdata->shadingRate;
        $phpValue = \iggyvolz\vulkan\enum\VkShadingRatePaletteEntryNV::from($cValue);
        return $phpValue;
    }

    public function setShadingRate(\iggyvolz\vulkan\enum\VkShadingRatePaletteEntryNV $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->shadingRate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampleCount(): int
    {
        $cValue = $this->cdata->sampleCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSampleCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->sampleCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampleLocationCount(): int
    {
        $cValue = $this->cdata->sampleLocationCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSampleLocationCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->sampleLocationCount = $cValue;
    }

    /**
     * VkCoarseSampleLocationNV* /
     */
    public function getPSampleLocations(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pSampleLocations;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkCoarseSampleLocationNV', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSampleLocations(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSampleLocations = $cValue;
    }
}
