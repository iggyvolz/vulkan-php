<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubresourceLayout
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
        null|int $offset = null,
        null|int $size = null,
        null|int $rowPitch = null,
        null|int $arrayPitch = null,
        null|int $depthPitch = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubresourceLayout', false), $vulkan->ffi);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($rowPitch)) $self->setRowPitch($rowPitch);
        if(!is_null($arrayPitch)) $self->setArrayPitch($arrayPitch);
        if(!is_null($depthPitch)) $self->setDepthPitch($depthPitch);
        return $self;
    }

    /**
     * uint64_t/
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
     * uint64_t/
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

    /**
     * uint64_t/
     */
    public function getRowPitch(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rowPitch;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRowPitch(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->rowPitch = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getArrayPitch(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->arrayPitch;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setArrayPitch(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->arrayPitch = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDepthPitch(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthPitch;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepthPitch(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->depthPitch = $cValue;
    }
}
