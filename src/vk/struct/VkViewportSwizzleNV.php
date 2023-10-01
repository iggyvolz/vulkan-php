<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkViewportSwizzleNV
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
        null|\iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV $x = null,
        null|\iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV $y = null,
        null|\iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV $z = null,
        null|\iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV $w = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkViewportSwizzleNV', false), $vulkan->ffi);
        if(!is_null($x)) $self->setX($x);
        if(!is_null($y)) $self->setY($y);
        if(!is_null($z)) $self->setZ($z);
        if(!is_null($w)) $self->setW($w);
        return $self;
    }

    /**
     * VkViewportCoordinateSwizzleNV/
     */
    public function getX(): \iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->x;
        $phpValue = \iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV::from($cValue);
        return $phpValue;
    }

    public function setX(\iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->x = $cValue;
    }

    /**
     * VkViewportCoordinateSwizzleNV/
     */
    public function getY(): \iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->y;
        $phpValue = \iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV::from($cValue);
        return $phpValue;
    }

    public function setY(\iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->y = $cValue;
    }

    /**
     * VkViewportCoordinateSwizzleNV/
     */
    public function getZ(): \iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->z;
        $phpValue = \iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV::from($cValue);
        return $phpValue;
    }

    public function setZ(\iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->z = $cValue;
    }

    /**
     * VkViewportCoordinateSwizzleNV/
     */
    public function getW(): \iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->w;
        $phpValue = \iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV::from($cValue);
        return $phpValue;
    }

    public function setW(\iggyvolz\vulkan\enum\VkViewportCoordinateSwizzleNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->w = $cValue;
    }
}
