<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindIndexBufferIndirectCommandNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "bufferAddress" => $this->getBufferAddress(),
          "size" => $this->getSize(),
          "indexType" => $this->getIndexType(),
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
        null|\iggyvolz\vulkan\enum\VkIndexType $indexType = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBindIndexBufferIndirectCommandNV', false), $vulkan);
        if(!is_null($bufferAddress)) $self->setBufferAddress($bufferAddress);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($indexType)) $self->setIndexType($indexType);
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
     * VkIndexType/
     */
    public function getIndexType(): \iggyvolz\vulkan\enum\VkIndexType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->indexType;
        $phpValue = \iggyvolz\vulkan\enum\VkIndexType::from($cValue);
        return $phpValue;
    }

    public function setIndexType(\iggyvolz\vulkan\enum\VkIndexType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->indexType = $cValue;
    }
}
