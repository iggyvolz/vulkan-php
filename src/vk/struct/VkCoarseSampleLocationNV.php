<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCoarseSampleLocationNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "pixelX" => $this->getPixelX(),
          "pixelY" => $this->getPixelY(),
          "sample" => $this->getSample(),
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
        null|int $pixelX = null,
        null|int $pixelY = null,
        null|int $sample = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCoarseSampleLocationNV', false), $vulkan);
        if(!is_null($pixelX)) $self->setPixelX($pixelX);
        if(!is_null($pixelY)) $self->setPixelY($pixelY);
        if(!is_null($sample)) $self->setSample($sample);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getPixelX(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pixelX;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPixelX(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pixelX = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPixelY(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pixelY;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPixelY(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pixelY = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSample(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sample;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSample(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sample = $cValue;
    }
}
