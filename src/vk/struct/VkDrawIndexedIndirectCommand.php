<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrawIndexedIndirectCommand implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "indexCount" => $this->getIndexCount(),
          "instanceCount" => $this->getInstanceCount(),
          "firstIndex" => $this->getFirstIndex(),
          "vertexOffset" => $this->getVertexOffset(),
          "firstInstance" => $this->getFirstInstance(),
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
        null|int $indexCount = null,
        null|int $instanceCount = null,
        null|int $firstIndex = null,
        null|int $vertexOffset = null,
        null|int $firstInstance = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrawIndexedIndirectCommand', false));
        if(!is_null($indexCount)) $self->setIndexCount($indexCount);
        if(!is_null($instanceCount)) $self->setInstanceCount($instanceCount);
        if(!is_null($firstIndex)) $self->setFirstIndex($firstIndex);
        if(!is_null($vertexOffset)) $self->setVertexOffset($vertexOffset);
        if(!is_null($firstInstance)) $self->setFirstInstance($firstInstance);
        return $self;
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
     * uint32_t/
     */
    public function getInstanceCount(): int
    {
        $cValue = $this->cdata->instanceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->instanceCount = $cValue;
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

    /**
     * uint32_t/
     */
    public function getFirstInstance(): int
    {
        $cValue = $this->cdata->firstInstance;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstInstance(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->firstInstance = $cValue;
    }
}
