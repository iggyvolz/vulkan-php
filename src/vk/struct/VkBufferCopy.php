<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferCopy implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "srcOffset" => $this->getSrcOffset(),
          "dstOffset" => $this->getDstOffset(),
          "size" => $this->getSize(),
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
        null|int $srcOffset = null,
        null|int $dstOffset = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferCopy', false), $vulkan);
        if(!is_null($srcOffset)) $self->setSrcOffset($srcOffset);
        if(!is_null($dstOffset)) $self->setDstOffset($dstOffset);
        if(!is_null($size)) $self->setSize($size);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getSrcOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->srcOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDstOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dstOffset = $cValue;
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
}
