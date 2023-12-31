<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMeshShaderPropertiesNV
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $maxDrawMeshTasksCount = null,
        null|int $maxTaskWorkGroupInvocations = null,
        mixed $maxTaskWorkGroupSize = null,
        null|int $maxTaskTotalMemorySize = null,
        null|int $maxTaskOutputCount = null,
        null|int $maxMeshWorkGroupInvocations = null,
        mixed $maxMeshWorkGroupSize = null,
        null|int $maxMeshTotalMemorySize = null,
        null|int $maxMeshOutputVertices = null,
        null|int $maxMeshOutputPrimitives = null,
        null|int $maxMeshMultiviewViewCount = null,
        null|int $meshOutputPerVertexGranularity = null,
        null|int $meshOutputPerPrimitiveGranularity = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMeshShaderPropertiesNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxDrawMeshTasksCount)) $self->setMaxDrawMeshTasksCount($maxDrawMeshTasksCount);
        if(!is_null($maxTaskWorkGroupInvocations)) $self->setMaxTaskWorkGroupInvocations($maxTaskWorkGroupInvocations);
        if(!is_null($maxTaskWorkGroupSize)) $self->setMaxTaskWorkGroupSize($maxTaskWorkGroupSize);
        if(!is_null($maxTaskTotalMemorySize)) $self->setMaxTaskTotalMemorySize($maxTaskTotalMemorySize);
        if(!is_null($maxTaskOutputCount)) $self->setMaxTaskOutputCount($maxTaskOutputCount);
        if(!is_null($maxMeshWorkGroupInvocations)) $self->setMaxMeshWorkGroupInvocations($maxMeshWorkGroupInvocations);
        if(!is_null($maxMeshWorkGroupSize)) $self->setMaxMeshWorkGroupSize($maxMeshWorkGroupSize);
        if(!is_null($maxMeshTotalMemorySize)) $self->setMaxMeshTotalMemorySize($maxMeshTotalMemorySize);
        if(!is_null($maxMeshOutputVertices)) $self->setMaxMeshOutputVertices($maxMeshOutputVertices);
        if(!is_null($maxMeshOutputPrimitives)) $self->setMaxMeshOutputPrimitives($maxMeshOutputPrimitives);
        if(!is_null($maxMeshMultiviewViewCount)) $self->setMaxMeshMultiviewViewCount($maxMeshMultiviewViewCount);
        if(!is_null($meshOutputPerVertexGranularity)) $self->setMeshOutputPerVertexGranularity($meshOutputPerVertexGranularity);
        if(!is_null($meshOutputPerPrimitiveGranularity)) $self->setMeshOutputPerPrimitiveGranularity($meshOutputPerPrimitiveGranularity);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDrawMeshTasksCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDrawMeshTasksCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDrawMeshTasksCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDrawMeshTasksCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTaskWorkGroupInvocations(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskWorkGroupInvocations;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTaskWorkGroupInvocations(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTaskWorkGroupInvocations = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxTaskWorkGroupSize(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskWorkGroupSize;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxTaskWorkGroupSize(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxTaskWorkGroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTaskTotalMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskTotalMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTaskTotalMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTaskTotalMemorySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTaskOutputCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskOutputCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTaskOutputCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTaskOutputCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshWorkGroupInvocations(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshWorkGroupInvocations;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshWorkGroupInvocations(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshWorkGroupInvocations = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxMeshWorkGroupSize(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshWorkGroupSize;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxMeshWorkGroupSize(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxMeshWorkGroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshTotalMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshTotalMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshTotalMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshTotalMemorySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshOutputVertices(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshOutputVertices;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshOutputVertices(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshOutputVertices = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshOutputPrimitives(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshOutputPrimitives;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshOutputPrimitives(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshOutputPrimitives = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshMultiviewViewCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshMultiviewViewCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshMultiviewViewCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshMultiviewViewCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMeshOutputPerVertexGranularity(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->meshOutputPerVertexGranularity;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMeshOutputPerVertexGranularity(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->meshOutputPerVertexGranularity = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMeshOutputPerPrimitiveGranularity(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->meshOutputPerPrimitiveGranularity;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMeshOutputPerPrimitiveGranularity(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->meshOutputPerPrimitiveGranularity = $cValue;
    }
}
