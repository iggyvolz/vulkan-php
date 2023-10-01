<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyMemoryIndirectCommandNV
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
        null|int $srcAddress = null,
        null|int $dstAddress = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyMemoryIndirectCommandNV', false), $vulkan->ffi);
        if(!is_null($srcAddress)) $self->setSrcAddress($srcAddress);
        if(!is_null($dstAddress)) $self->setDstAddress($dstAddress);
        if(!is_null($size)) $self->setSize($size);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getSrcAddress(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcAddress(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->srcAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDstAddress(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstAddress(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->dstAddress = $cValue;
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
}
