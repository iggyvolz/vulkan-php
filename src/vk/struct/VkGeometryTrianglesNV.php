<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGeometryTrianglesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "vertexData" => $this->getVertexData(),
          "vertexOffset" => $this->getVertexOffset(),
          "vertexCount" => $this->getVertexCount(),
          "vertexStride" => $this->getVertexStride(),
          "vertexFormat" => $this->getVertexFormat(),
          "indexData" => $this->getIndexData(),
          "indexOffset" => $this->getIndexOffset(),
          "indexCount" => $this->getIndexCount(),
          "indexType" => $this->getIndexType(),
          "transformData" => $this->getTransformData(),
          "transformOffset" => $this->getTransformOffset(),
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
        null|VkBuffer $vertexData = null,
        null|int $vertexOffset = null,
        null|int $vertexCount = null,
        null|int $vertexStride = null,
        null|\iggyvolz\vulkan\enum\VkFormat $vertexFormat = null,
        null|VkBuffer $indexData = null,
        null|int $indexOffset = null,
        null|int $indexCount = null,
        null|\iggyvolz\vulkan\enum\VkIndexType $indexType = null,
        null|VkBuffer $transformData = null,
        null|int $transformOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkGeometryTrianglesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($vertexData)) $self->setVertexData($vertexData);
        if(!is_null($vertexOffset)) $self->setVertexOffset($vertexOffset);
        if(!is_null($vertexCount)) $self->setVertexCount($vertexCount);
        if(!is_null($vertexStride)) $self->setVertexStride($vertexStride);
        if(!is_null($vertexFormat)) $self->setVertexFormat($vertexFormat);
        if(!is_null($indexData)) $self->setIndexData($indexData);
        if(!is_null($indexOffset)) $self->setIndexOffset($indexOffset);
        if(!is_null($indexCount)) $self->setIndexCount($indexCount);
        if(!is_null($indexType)) $self->setIndexType($indexType);
        if(!is_null($transformData)) $self->setTransformData($transformData);
        if(!is_null($transformOffset)) $self->setTransformOffset($transformOffset);
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
     * VkBuffer/
     */
    public function getVertexData(): VkBuffer
    {
        $cValue = $this->cdata->vertexData;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setVertexData(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->vertexData = $cValue;
    }

    /**
     * uint64_t/
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
     * VkBuffer/
     */
    public function getIndexData(): VkBuffer
    {
        $cValue = $this->cdata->indexData;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setIndexData(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->indexData = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getIndexOffset(): int
    {
        $cValue = $this->cdata->indexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->indexOffset = $cValue;
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
     * VkBuffer/
     */
    public function getTransformData(): VkBuffer
    {
        $cValue = $this->cdata->transformData;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setTransformData(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->transformData = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getTransformOffset(): int
    {
        $cValue = $this->cdata->transformOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTransformOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->transformOffset = $cValue;
    }
}
