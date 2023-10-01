<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAabbPositionsKHR
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
        null|float $minX = null,
        null|float $minY = null,
        null|float $minZ = null,
        null|float $maxX = null,
        null|float $maxY = null,
        null|float $maxZ = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAabbPositionsKHR', false), $vulkan->ffi);
        if(!is_null($minX)) $self->setMinX($minX);
        if(!is_null($minY)) $self->setMinY($minY);
        if(!is_null($minZ)) $self->setMinZ($minZ);
        if(!is_null($maxX)) $self->setMaxX($maxX);
        if(!is_null($maxY)) $self->setMaxY($maxY);
        if(!is_null($maxZ)) $self->setMaxZ($maxZ);
        return $self;
    }

    /**
     * float/
     */
    public function getMinX(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minX;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinX(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minX = $cValue;
    }

    /**
     * float/
     */
    public function getMinY(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minY;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinY(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minY = $cValue;
    }

    /**
     * float/
     */
    public function getMinZ(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minZ;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinZ(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minZ = $cValue;
    }

    /**
     * float/
     */
    public function getMaxX(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxX;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxX(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxX = $cValue;
    }

    /**
     * float/
     */
    public function getMaxY(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxY;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxY(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxY = $cValue;
    }

    /**
     * float/
     */
    public function getMaxZ(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxZ;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxZ(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxZ = $cValue;
    }
}
