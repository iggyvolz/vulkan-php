<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRayTracingPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderGroupHandleSize" => $this->getShaderGroupHandleSize(),
          "maxRecursionDepth" => $this->getMaxRecursionDepth(),
          "maxShaderGroupStride" => $this->getMaxShaderGroupStride(),
          "shaderGroupBaseAlignment" => $this->getShaderGroupBaseAlignment(),
          "maxGeometryCount" => $this->getMaxGeometryCount(),
          "maxInstanceCount" => $this->getMaxInstanceCount(),
          "maxTriangleCount" => $this->getMaxTriangleCount(),
          "maxDescriptorSetAccelerationStructures" => $this->getMaxDescriptorSetAccelerationStructures(),
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
        null|int $shaderGroupHandleSize = null,
        null|int $maxRecursionDepth = null,
        null|int $maxShaderGroupStride = null,
        null|int $shaderGroupBaseAlignment = null,
        null|int $maxGeometryCount = null,
        null|int $maxInstanceCount = null,
        null|int $maxTriangleCount = null,
        null|int $maxDescriptorSetAccelerationStructures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRayTracingPropertiesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderGroupHandleSize)) $self->setShaderGroupHandleSize($shaderGroupHandleSize);
        if(!is_null($maxRecursionDepth)) $self->setMaxRecursionDepth($maxRecursionDepth);
        if(!is_null($maxShaderGroupStride)) $self->setMaxShaderGroupStride($maxShaderGroupStride);
        if(!is_null($shaderGroupBaseAlignment)) $self->setShaderGroupBaseAlignment($shaderGroupBaseAlignment);
        if(!is_null($maxGeometryCount)) $self->setMaxGeometryCount($maxGeometryCount);
        if(!is_null($maxInstanceCount)) $self->setMaxInstanceCount($maxInstanceCount);
        if(!is_null($maxTriangleCount)) $self->setMaxTriangleCount($maxTriangleCount);
        if(!is_null($maxDescriptorSetAccelerationStructures)) $self->setMaxDescriptorSetAccelerationStructures($maxDescriptorSetAccelerationStructures);
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
     * uint32_t/
     */
    public function getShaderGroupHandleSize(): int
    {
        $cValue = $this->cdata->shaderGroupHandleSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderGroupHandleSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shaderGroupHandleSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRecursionDepth(): int
    {
        $cValue = $this->cdata->maxRecursionDepth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRecursionDepth(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxRecursionDepth = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxShaderGroupStride(): int
    {
        $cValue = $this->cdata->maxShaderGroupStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxShaderGroupStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxShaderGroupStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderGroupBaseAlignment(): int
    {
        $cValue = $this->cdata->shaderGroupBaseAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderGroupBaseAlignment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shaderGroupBaseAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxGeometryCount(): int
    {
        $cValue = $this->cdata->maxGeometryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxGeometryCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxGeometryCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxInstanceCount(): int
    {
        $cValue = $this->cdata->maxInstanceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxInstanceCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxInstanceCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxTriangleCount(): int
    {
        $cValue = $this->cdata->maxTriangleCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTriangleCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxTriangleCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetAccelerationStructures(): int
    {
        $cValue = $this->cdata->maxDescriptorSetAccelerationStructures;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetAccelerationStructures(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetAccelerationStructures = $cValue;
    }
}
