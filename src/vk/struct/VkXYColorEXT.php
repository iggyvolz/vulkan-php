<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkXYColorEXT
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|float $x = null, null|float $y = null): self
    {
        $self = new self( $vulkan->ffi->new('VkXYColorEXT', false), $vulkan->ffi);
        if(!is_null($x)) $self->setX($x);
        if(!is_null($y)) $self->setY($y);
        return $self;
    }

    /**
     * float/
     */
    public function getX(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->x;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setX(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->x = $cValue;
    }

    /**
     * float/
     */
    public function getY(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->y;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setY(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->y = $cValue;
    }
}
