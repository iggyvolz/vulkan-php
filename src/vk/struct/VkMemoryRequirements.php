<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMemoryRequirements implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "size" => $this->getSize(),
          "alignment" => $this->getAlignment(),
          "memoryTypeBits" => $this->getMemoryTypeBits(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $size = null,
        null|int $alignment = null,
        null|int $memoryTypeBits = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMemoryRequirements', false), $vulkan);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($alignment)) $self->setAlignment($alignment);
        if(!is_null($memoryTypeBits)) $self->setMemoryTypeBits($memoryTypeBits);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->alignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->alignment = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMemoryTypeBits(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->memoryTypeBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryTypeBits(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryTypeBits = $cValue;
    }
}
