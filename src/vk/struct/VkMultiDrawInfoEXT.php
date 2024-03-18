<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMultiDrawInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "firstVertex" => $this->getFirstVertex(),
          "vertexCount" => $this->getVertexCount(),
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
        null|int $firstVertex = null,
        null|int $vertexCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMultiDrawInfoEXT', false));
        if(!is_null($firstVertex)) $self->setFirstVertex($firstVertex);
        if(!is_null($vertexCount)) $self->setVertexCount($vertexCount);
        return $self;
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
}
