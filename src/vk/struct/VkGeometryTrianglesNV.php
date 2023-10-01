<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGeometryTrianglesNV
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
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
        $self = new self( $vulkan->ffi->new('VkGeometryTrianglesNV', false), $vulkan->ffi);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getVertexData(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexData;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setVertexData(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->vertexData = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getVertexOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vertexOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vertexCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getVertexStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vertexStride = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getVertexFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setVertexFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->vertexFormat = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getIndexData(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indexData;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setIndexData(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->indexData = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getIndexOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->indexOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndexCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->indexCount = $cValue;
    }

    /**
     * VkIndexType/
     */
    public function getIndexType(): \iggyvolz\vulkan\enum\VkIndexType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indexType;
        $phpValue = \iggyvolz\vulkan\enum\VkIndexType::from($cValue);
        return $phpValue;
    }

    public function setIndexType(\iggyvolz\vulkan\enum\VkIndexType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->indexType = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getTransformData(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->transformData;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setTransformData(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->transformData = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getTransformOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->transformOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTransformOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->transformOffset = $cValue;
    }
}
