<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkShadingRatePaletteNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "shadingRatePaletteEntryCount" => $this->getShadingRatePaletteEntryCount(),
          "pShadingRatePaletteEntries" => $this->getPShadingRatePaletteEntries(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $shadingRatePaletteEntryCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pShadingRatePaletteEntries = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkShadingRatePaletteNV', false), $vulkan);
        if(!is_null($shadingRatePaletteEntryCount)) $self->setShadingRatePaletteEntryCount($shadingRatePaletteEntryCount);
        if(!is_null($pShadingRatePaletteEntries)) $self->setPShadingRatePaletteEntries($pShadingRatePaletteEntries);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getShadingRatePaletteEntryCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shadingRatePaletteEntryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShadingRatePaletteEntryCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->shadingRatePaletteEntryCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPShadingRatePaletteEntries(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pShadingRatePaletteEntries;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPShadingRatePaletteEntries(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pShadingRatePaletteEntries = $cValue;
    }
}
