<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExtent3D implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "width" => $this->getWidth(),
          "height" => $this->getHeight(),
          "depth" => $this->getDepth(),
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
        null|int $width = null,
        null|int $height = null,
        null|int $depth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExtent3D', false), $vulkan);
        if(!is_null($width)) $self->setWidth($width);
        if(!is_null($height)) $self->setHeight($height);
        if(!is_null($depth)) $self->setDepth($depth);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getWidth(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->width;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWidth(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->width = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeight(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->height;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeight(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->height = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepth(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->depth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepth(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->depth = $cValue;
    }
}
