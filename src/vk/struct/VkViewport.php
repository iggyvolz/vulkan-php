<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkViewport
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
        null|float $x = null,
        null|float $y = null,
        null|float $width = null,
        null|float $height = null,
        null|float $minDepth = null,
        null|float $maxDepth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkViewport', false), $vulkan->ffi);
        if(!is_null($x)) $self->setX($x);
        if(!is_null($y)) $self->setY($y);
        if(!is_null($width)) $self->setWidth($width);
        if(!is_null($height)) $self->setHeight($height);
        if(!is_null($minDepth)) $self->setMinDepth($minDepth);
        if(!is_null($maxDepth)) $self->setMaxDepth($maxDepth);
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

    /**
     * float/
     */
    public function getWidth(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->width;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWidth(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->width = $cValue;
    }

    /**
     * float/
     */
    public function getHeight(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->height;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeight(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->height = $cValue;
    }

    /**
     * float/
     */
    public function getMinDepth(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minDepth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinDepth(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minDepth = $cValue;
    }

    /**
     * float/
     */
    public function getMaxDepth(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDepth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDepth(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDepth = $cValue;
    }
}
