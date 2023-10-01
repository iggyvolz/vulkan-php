<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShadingRateImagePropertiesNV
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
        null|VkExtent2D $shadingRateTexelSize = null,
        null|int $shadingRatePaletteSize = null,
        null|int $shadingRateMaxCoarseSamples = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShadingRateImagePropertiesNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shadingRateTexelSize)) $self->setShadingRateTexelSize($shadingRateTexelSize);
        if(!is_null($shadingRatePaletteSize)) $self->setShadingRatePaletteSize($shadingRatePaletteSize);
        if(!is_null($shadingRateMaxCoarseSamples)) $self->setShadingRateMaxCoarseSamples($shadingRateMaxCoarseSamples);
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
     * VkExtent2D/
     */
    public function getShadingRateTexelSize(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shadingRateTexelSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setShadingRateTexelSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->shadingRateTexelSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShadingRatePaletteSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shadingRatePaletteSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShadingRatePaletteSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shadingRatePaletteSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShadingRateMaxCoarseSamples(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shadingRateMaxCoarseSamples;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShadingRateMaxCoarseSamples(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shadingRateMaxCoarseSamples = $cValue;
    }
}
