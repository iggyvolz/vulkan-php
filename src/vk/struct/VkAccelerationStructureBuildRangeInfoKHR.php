<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureBuildRangeInfoKHR
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
        null|int $primitiveCount = null,
        null|int $primitiveOffset = null,
        null|int $firstVertex = null,
        null|int $transformOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureBuildRangeInfoKHR', false), $vulkan->ffi);
        if(!is_null($primitiveCount)) $self->setPrimitiveCount($primitiveCount);
        if(!is_null($primitiveOffset)) $self->setPrimitiveOffset($primitiveOffset);
        if(!is_null($firstVertex)) $self->setFirstVertex($firstVertex);
        if(!is_null($transformOffset)) $self->setTransformOffset($transformOffset);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getPrimitiveCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->primitiveCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPrimitiveCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->primitiveCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrimitiveOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->primitiveOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPrimitiveOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->primitiveOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFirstVertex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->firstVertex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstVertex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->firstVertex = $cValue;
    }

    /**
     * uint32_t/
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
