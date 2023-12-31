<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkShadingRatePaletteNV
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
        null|int $shadingRatePaletteEntryCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pShadingRatePaletteEntries = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkShadingRatePaletteNV', false), $vulkan->ffi);
        if(!is_null($shadingRatePaletteEntryCount)) $self->setShadingRatePaletteEntryCount($shadingRatePaletteEntryCount);
        if(!is_null($pShadingRatePaletteEntries)) $self->setPShadingRatePaletteEntries($pShadingRatePaletteEntries);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getShadingRatePaletteEntryCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shadingRatePaletteEntryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShadingRatePaletteEntryCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shadingRatePaletteEntryCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPShadingRatePaletteEntries(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pShadingRatePaletteEntries;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPShadingRatePaletteEntries(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pShadingRatePaletteEntries = $cValue;
    }
}
