<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSpecializationMapEntry
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
        null|int $constantID = null,
        null|int $offset = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSpecializationMapEntry', false), $vulkan->ffi);
        if(!is_null($constantID)) $self->setConstantID($constantID);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($size)) $self->setSize($size);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getConstantID(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->constantID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setConstantID(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->constantID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * size_t/
     */
    public function getSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }
}
