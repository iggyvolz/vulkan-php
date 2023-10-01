<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGeometryDataNV
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
        null|VkGeometryTrianglesNV $triangles = null,
        null|VkGeometryAABBNV $aabbs = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkGeometryDataNV', false), $vulkan->ffi);
        if(!is_null($triangles)) $self->setTriangles($triangles);
        if(!is_null($aabbs)) $self->setAabbs($aabbs);
        return $self;
    }

    /**
     * VkGeometryTrianglesNV/
     */
    public function getTriangles(): VkGeometryTrianglesNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->triangles;
        $phpValue = new \iggyvolz\vulkan\struct\VkGeometryTrianglesNV($cValue, $ffi);
        return $phpValue;
    }

    public function setTriangles(VkGeometryTrianglesNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->triangles = $cValue;
    }

    /**
     * VkGeometryAABBNV/
     */
    public function getAabbs(): VkGeometryAABBNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->aabbs;
        $phpValue = new \iggyvolz\vulkan\struct\VkGeometryAABBNV($cValue, $ffi);
        return $phpValue;
    }

    public function setAabbs(VkGeometryAABBNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->aabbs = $cValue;
    }
}
