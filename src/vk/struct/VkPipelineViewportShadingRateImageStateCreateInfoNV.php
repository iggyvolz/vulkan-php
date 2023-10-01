<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineViewportShadingRateImageStateCreateInfoNV
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
        null|bool $shadingRateImageEnable = null,
        null|int $viewportCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pShadingRatePalettes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineViewportShadingRateImageStateCreateInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shadingRateImageEnable)) $self->setShadingRateImageEnable($shadingRateImageEnable);
        if(!is_null($viewportCount)) $self->setViewportCount($viewportCount);
        if(!is_null($pShadingRatePalettes)) $self->setPShadingRatePalettes($pShadingRatePalettes);
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
     * uint32_t/
     */
    public function getShadingRateImageEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shadingRateImageEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShadingRateImageEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shadingRateImageEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getViewportCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->viewportCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewportCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->viewportCount = $cValue;
    }

    /**
     * VkShadingRatePaletteNV* /
     */
    public function getPShadingRatePalettes(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pShadingRatePalettes;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkShadingRatePaletteNV', $cValue, $ffi);
        return $phpValue;
    }

    public function setPShadingRatePalettes(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pShadingRatePalettes = $cValue;
    }
}
