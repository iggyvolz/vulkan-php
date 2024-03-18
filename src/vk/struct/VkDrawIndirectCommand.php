<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrawIndirectCommand implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "vertexCount" => $this->getVertexCount(),
          "instanceCount" => $this->getInstanceCount(),
          "firstVertex" => $this->getFirstVertex(),
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
        null|int $vertexCount = null,
        null|int $instanceCount = null,
        null|int $firstVertex = null,
        null|int $firstInstance = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrawIndirectCommand', false));
        if(!is_null($vertexCount)) $self->setVertexCount($vertexCount);
        if(!is_null($instanceCount)) $self->setInstanceCount($instanceCount);
        if(!is_null($firstVertex)) $self->setFirstVertex($firstVertex);
        if(!is_null($firstInstance)) $self->setFirstInstance($firstInstance);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getVertexCount(): int
    {
        $cValue = $this->cdata->vertexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->vertexCount = $cValue;
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
    public function getFirstVertex(): int
    {
        $cValue = $this->cdata->firstVertex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstVertex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->firstVertex = $cValue;
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
