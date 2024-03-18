<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureGeometryTrianglesDataKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "vertexFormat" => $this->getVertexFormat(),
          "vertexData" => $this->getVertexData(),
          "vertexStride" => $this->getVertexStride(),
          "maxVertex" => $this->getMaxVertex(),
          "indexType" => $this->getIndexType(),
          "indexData" => $this->getIndexData(),
          "transformData" => $this->getTransformData(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|\iggyvolz\vulkan\enum\VkFormat $vertexFormat = null,
        mixed $vertexData = null,
        null|int $vertexStride = null,
        null|int $maxVertex = null,
        null|\iggyvolz\vulkan\enum\VkIndexType $indexType = null,
        mixed $indexData = null,
        mixed $transformData = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureGeometryTrianglesDataKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($vertexFormat)) $self->setVertexFormat($vertexFormat);
        if(!is_null($vertexData)) $self->setVertexData($vertexData);
        if(!is_null($vertexStride)) $self->setVertexStride($vertexStride);
        if(!is_null($maxVertex)) $self->setMaxVertex($maxVertex);
        if(!is_null($indexType)) $self->setIndexType($indexType);
        if(!is_null($indexData)) $self->setIndexData($indexData);
        if(!is_null($transformData)) $self->setTransformData($transformData);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getVertexFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $cValue = $this->cdata->vertexFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setVertexFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->vertexFormat = $cValue;
    }

    /**
     * void* /
     */
    public function getVertexData(): mixed
    {
        $cValue = $this->cdata->vertexData;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setVertexData(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->vertexData = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getVertexStride(): int
    {
        $cValue = $this->cdata->vertexStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->vertexStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxVertex(): int
    {
        $cValue = $this->cdata->maxVertex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxVertex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxVertex = $cValue;
    }

    /**
     * VkIndexType/
     */
    public function getIndexType(): \iggyvolz\vulkan\enum\VkIndexType
    {
        $cValue = $this->cdata->indexType;
        $phpValue = \iggyvolz\vulkan\enum\VkIndexType::from($cValue);
        return $phpValue;
    }

    public function setIndexType(\iggyvolz\vulkan\enum\VkIndexType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->indexType = $cValue;
    }

    /**
     * void* /
     */
    public function getIndexData(): mixed
    {
        $cValue = $this->cdata->indexData;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setIndexData(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->indexData = $cValue;
    }

    /**
     * void* /
     */
    public function getTransformData(): mixed
    {
        $cValue = $this->cdata->transformData;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setTransformData(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->transformData = $cValue;
    }
}
