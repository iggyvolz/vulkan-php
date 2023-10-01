<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrawIndexedIndirectCommand
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
        null|int $indexCount = null,
        null|int $instanceCount = null,
        null|int $firstIndex = null,
        null|int $vertexOffset = null,
        null|int $firstInstance = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrawIndexedIndirectCommand', false), $vulkan->ffi);
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
     * uint32_t/
     */
    public function getInstanceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->instanceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->instanceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFirstIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->firstIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->firstIndex = $cValue;
    }

    /**
     * int32_t/
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
    public function getFirstInstance(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->firstInstance;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstInstance(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->firstInstance = $cValue;
    }
}
