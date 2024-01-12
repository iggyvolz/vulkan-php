<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMultiDrawIndexedInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "firstIndex" => $this->getFirstIndex(),
          "indexCount" => $this->getIndexCount(),
          "vertexOffset" => $this->getVertexOffset(),
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
        null|int $firstIndex = null,
        null|int $indexCount = null,
        null|int $vertexOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMultiDrawIndexedInfoEXT', false), $vulkan);
        if(!is_null($firstIndex)) $self->setFirstIndex($firstIndex);
        if(!is_null($indexCount)) $self->setIndexCount($indexCount);
        if(!is_null($vertexOffset)) $self->setVertexOffset($vertexOffset);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getFirstIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->firstIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->firstIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndexCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->indexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->indexCount = $cValue;
    }

    /**
     * int32_t/
     */
    public function getVertexOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vertexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->vertexOffset = $cValue;
    }
}
