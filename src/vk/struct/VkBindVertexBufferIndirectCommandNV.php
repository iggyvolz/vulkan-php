<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindVertexBufferIndirectCommandNV
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
        null|int $bufferAddress = null,
        null|int $size = null,
        null|int $stride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBindVertexBufferIndirectCommandNV', false), $vulkan->ffi);
        if(!is_null($bufferAddress)) $self->setBufferAddress($bufferAddress);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($stride)) $self->setStride($stride);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getBufferAddress(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferAddress(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferAddress = $cValue;
    }

    /**
     * uint32_t/
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
     * uint32_t/
     */
    public function getStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stride = $cValue;
    }
}
