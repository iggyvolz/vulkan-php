<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMemoryHeap
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
        null|int $size = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMemoryHeap', false), $vulkan->ffi);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($flags)) $self->setFlags($flags);
        return $self;
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
     * VkMemoryHeapFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkMemoryHeapFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkMemoryHeapFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
