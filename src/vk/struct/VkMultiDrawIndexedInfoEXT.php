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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $firstIndex = null,
        null|int $indexCount = null,
        null|int $vertexOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMultiDrawIndexedInfoEXT', false));
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
        $cValue = $this->cdata->firstIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->firstIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndexCount(): int
    {
        $cValue = $this->cdata->indexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->indexCount = $cValue;
    }

    /**
     * int32_t/
     */
    public function getVertexOffset(): int
    {
        $cValue = $this->cdata->vertexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->vertexOffset = $cValue;
    }
}
