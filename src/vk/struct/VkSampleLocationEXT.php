<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSampleLocationEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "x" => $this->getX(),
          "y" => $this->getY(),
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|float $x = null, null|float $y = null): self
    {
        $self = new self( $vulkan->ffi->new('VkSampleLocationEXT', false), $vulkan);
        if(!is_null($x)) $self->setX($x);
        if(!is_null($y)) $self->setY($y);
        return $self;
    }

    /**
     * float/
     */
    public function getX(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->x;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setX(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->x = $cValue;
    }

    /**
     * float/
     */
    public function getY(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->y;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setY(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->y = $cValue;
    }
}
