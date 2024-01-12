<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindVertexBufferIndirectCommandNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "bufferAddress" => $this->getBufferAddress(),
          "size" => $this->getSize(),
          "stride" => $this->getStride(),
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
        null|int $bufferAddress = null,
        null|int $size = null,
        null|int $stride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBindVertexBufferIndirectCommandNV', false), $vulkan);
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
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferAddress = $cValue;
    }

    /**
     * uint32_t/
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
     * uint32_t/
     */
    public function getStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->stride = $cValue;
    }
}
