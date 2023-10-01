<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrawMeshTasksIndirectCommandEXT
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
        null|int $groupCountX = null,
        null|int $groupCountY = null,
        null|int $groupCountZ = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrawMeshTasksIndirectCommandEXT', false), $vulkan->ffi);
        if(!is_null($groupCountX)) $self->setGroupCountX($groupCountX);
        if(!is_null($groupCountY)) $self->setGroupCountY($groupCountY);
        if(!is_null($groupCountZ)) $self->setGroupCountZ($groupCountZ);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getGroupCountX(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->groupCountX;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupCountX(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->groupCountX = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGroupCountY(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->groupCountY;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupCountY(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->groupCountY = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGroupCountZ(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->groupCountZ;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupCountZ(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->groupCountZ = $cValue;
    }
}
