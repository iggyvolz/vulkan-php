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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $width = null,
        null|int $height = null,
        null|int $depth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExtent3D', false));
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
        $cValue = $this->cdata->width;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWidth(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->width = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeight(): int
    {
        $cValue = $this->cdata->height;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeight(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->height = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepth(): int
    {
        $cValue = $this->cdata->depth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepth(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->depth = $cValue;
    }
}
