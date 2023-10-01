<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMeshShaderPropertiesEXT
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
        null|int $maxTaskWorkGroupTotalCount = null,
        mixed $maxTaskWorkGroupCount = null,
        null|int $maxTaskWorkGroupInvocations = null,
        mixed $maxTaskWorkGroupSize = null,
        null|int $maxTaskPayloadSize = null,
        null|int $maxTaskSharedMemorySize = null,
        null|int $maxTaskPayloadAndSharedMemorySize = null,
        null|int $maxMeshWorkGroupTotalCount = null,
        mixed $maxMeshWorkGroupCount = null,
        null|int $maxMeshWorkGroupInvocations = null,
        mixed $maxMeshWorkGroupSize = null,
        null|int $maxMeshSharedMemorySize = null,
        null|int $maxMeshPayloadAndSharedMemorySize = null,
        null|int $maxMeshOutputMemorySize = null,
        null|int $maxMeshPayloadAndOutputMemorySize = null,
        null|int $maxMeshOutputComponents = null,
        null|int $maxMeshOutputVertices = null,
        null|int $maxMeshOutputPrimitives = null,
        null|int $maxMeshOutputLayers = null,
        null|int $maxMeshMultiviewViewCount = null,
        null|int $meshOutputPerVertexGranularity = null,
        null|int $meshOutputPerPrimitiveGranularity = null,
        null|int $maxPreferredTaskWorkGroupInvocations = null,
        null|int $maxPreferredMeshWorkGroupInvocations = null,
        null|bool $prefersLocalInvocationVertexOutput = null,
        null|bool $prefersLocalInvocationPrimitiveOutput = null,
        null|bool $prefersCompactVertexOutput = null,
        null|bool $prefersCompactPrimitiveOutput = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMeshShaderPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxTaskWorkGroupTotalCount)) $self->setMaxTaskWorkGroupTotalCount($maxTaskWorkGroupTotalCount);
        if(!is_null($maxTaskWorkGroupCount)) $self->setMaxTaskWorkGroupCount($maxTaskWorkGroupCount);
        if(!is_null($maxTaskWorkGroupInvocations)) $self->setMaxTaskWorkGroupInvocations($maxTaskWorkGroupInvocations);
        if(!is_null($maxTaskWorkGroupSize)) $self->setMaxTaskWorkGroupSize($maxTaskWorkGroupSize);
        if(!is_null($maxTaskPayloadSize)) $self->setMaxTaskPayloadSize($maxTaskPayloadSize);
        if(!is_null($maxTaskSharedMemorySize)) $self->setMaxTaskSharedMemorySize($maxTaskSharedMemorySize);
        if(!is_null($maxTaskPayloadAndSharedMemorySize)) $self->setMaxTaskPayloadAndSharedMemorySize($maxTaskPayloadAndSharedMemorySize);
        if(!is_null($maxMeshWorkGroupTotalCount)) $self->setMaxMeshWorkGroupTotalCount($maxMeshWorkGroupTotalCount);
        if(!is_null($maxMeshWorkGroupCount)) $self->setMaxMeshWorkGroupCount($maxMeshWorkGroupCount);
        if(!is_null($maxMeshWorkGroupInvocations)) $self->setMaxMeshWorkGroupInvocations($maxMeshWorkGroupInvocations);
        if(!is_null($maxMeshWorkGroupSize)) $self->setMaxMeshWorkGroupSize($maxMeshWorkGroupSize);
        if(!is_null($maxMeshSharedMemorySize)) $self->setMaxMeshSharedMemorySize($maxMeshSharedMemorySize);
        if(!is_null($maxMeshPayloadAndSharedMemorySize)) $self->setMaxMeshPayloadAndSharedMemorySize($maxMeshPayloadAndSharedMemorySize);
        if(!is_null($maxMeshOutputMemorySize)) $self->setMaxMeshOutputMemorySize($maxMeshOutputMemorySize);
        if(!is_null($maxMeshPayloadAndOutputMemorySize)) $self->setMaxMeshPayloadAndOutputMemorySize($maxMeshPayloadAndOutputMemorySize);
        if(!is_null($maxMeshOutputComponents)) $self->setMaxMeshOutputComponents($maxMeshOutputComponents);
        if(!is_null($maxMeshOutputVertices)) $self->setMaxMeshOutputVertices($maxMeshOutputVertices);
        if(!is_null($maxMeshOutputPrimitives)) $self->setMaxMeshOutputPrimitives($maxMeshOutputPrimitives);
        if(!is_null($maxMeshOutputLayers)) $self->setMaxMeshOutputLayers($maxMeshOutputLayers);
        if(!is_null($maxMeshMultiviewViewCount)) $self->setMaxMeshMultiviewViewCount($maxMeshMultiviewViewCount);
        if(!is_null($meshOutputPerVertexGranularity)) $self->setMeshOutputPerVertexGranularity($meshOutputPerVertexGranularity);
        if(!is_null($meshOutputPerPrimitiveGranularity)) $self->setMeshOutputPerPrimitiveGranularity($meshOutputPerPrimitiveGranularity);
        if(!is_null($maxPreferredTaskWorkGroupInvocations)) $self->setMaxPreferredTaskWorkGroupInvocations($maxPreferredTaskWorkGroupInvocations);
        if(!is_null($maxPreferredMeshWorkGroupInvocations)) $self->setMaxPreferredMeshWorkGroupInvocations($maxPreferredMeshWorkGroupInvocations);
        if(!is_null($prefersLocalInvocationVertexOutput)) $self->setPrefersLocalInvocationVertexOutput($prefersLocalInvocationVertexOutput);
        if(!is_null($prefersLocalInvocationPrimitiveOutput)) $self->setPrefersLocalInvocationPrimitiveOutput($prefersLocalInvocationPrimitiveOutput);
        if(!is_null($prefersCompactVertexOutput)) $self->setPrefersCompactVertexOutput($prefersCompactVertexOutput);
        if(!is_null($prefersCompactPrimitiveOutput)) $self->setPrefersCompactPrimitiveOutput($prefersCompactPrimitiveOutput);
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
     * uint32_t/
     */
    public function getMaxTaskWorkGroupTotalCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskWorkGroupTotalCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTaskWorkGroupTotalCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTaskWorkGroupTotalCount = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxTaskWorkGroupCount(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskWorkGroupCount;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxTaskWorkGroupCount(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxTaskWorkGroupCount = $cValue;
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
    public function getMaxTaskPayloadSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskPayloadSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTaskPayloadSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTaskPayloadSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTaskSharedMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskSharedMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTaskSharedMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTaskSharedMemorySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTaskPayloadAndSharedMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTaskPayloadAndSharedMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTaskPayloadAndSharedMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTaskPayloadAndSharedMemorySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshWorkGroupTotalCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshWorkGroupTotalCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshWorkGroupTotalCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshWorkGroupTotalCount = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxMeshWorkGroupCount(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshWorkGroupCount;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxMeshWorkGroupCount(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxMeshWorkGroupCount = $cValue;
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
    public function getMaxMeshSharedMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshSharedMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshSharedMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshSharedMemorySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshPayloadAndSharedMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshPayloadAndSharedMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshPayloadAndSharedMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshPayloadAndSharedMemorySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshOutputMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshOutputMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshOutputMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshOutputMemorySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshPayloadAndOutputMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshPayloadAndOutputMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshPayloadAndOutputMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshPayloadAndOutputMemorySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMeshOutputComponents(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshOutputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshOutputComponents(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshOutputComponents = $cValue;
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
    public function getMaxMeshOutputLayers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMeshOutputLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMeshOutputLayers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMeshOutputLayers = $cValue;
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

    /**
     * uint32_t/
     */
    public function getMaxPreferredTaskWorkGroupInvocations(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPreferredTaskWorkGroupInvocations;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPreferredTaskWorkGroupInvocations(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPreferredTaskWorkGroupInvocations = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPreferredMeshWorkGroupInvocations(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPreferredMeshWorkGroupInvocations;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPreferredMeshWorkGroupInvocations(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPreferredMeshWorkGroupInvocations = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrefersLocalInvocationVertexOutput(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->prefersLocalInvocationVertexOutput;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrefersLocalInvocationVertexOutput(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->prefersLocalInvocationVertexOutput = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrefersLocalInvocationPrimitiveOutput(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->prefersLocalInvocationPrimitiveOutput;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrefersLocalInvocationPrimitiveOutput(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->prefersLocalInvocationPrimitiveOutput = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrefersCompactVertexOutput(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->prefersCompactVertexOutput;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrefersCompactVertexOutput(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->prefersCompactVertexOutput = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrefersCompactPrimitiveOutput(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->prefersCompactPrimitiveOutput;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrefersCompactPrimitiveOutput(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->prefersCompactPrimitiveOutput = $cValue;
    }
}
