<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceAccelerationStructurePropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxGeometryCount" => $this->getMaxGeometryCount(),
          "maxInstanceCount" => $this->getMaxInstanceCount(),
          "maxPrimitiveCount" => $this->getMaxPrimitiveCount(),
          "maxPerStageDescriptorAccelerationStructures" => $this->getMaxPerStageDescriptorAccelerationStructures(),
          "maxPerStageDescriptorUpdateAfterBindAccelerationStructures" => $this->getMaxPerStageDescriptorUpdateAfterBindAccelerationStructures(),
          "maxDescriptorSetAccelerationStructures" => $this->getMaxDescriptorSetAccelerationStructures(),
          "maxDescriptorSetUpdateAfterBindAccelerationStructures" => $this->getMaxDescriptorSetUpdateAfterBindAccelerationStructures(),
          "minAccelerationStructureScratchOffsetAlignment" => $this->getMinAccelerationStructureScratchOffsetAlignment(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $maxGeometryCount = null,
        null|int $maxInstanceCount = null,
        null|int $maxPrimitiveCount = null,
        null|int $maxPerStageDescriptorAccelerationStructures = null,
        null|int $maxPerStageDescriptorUpdateAfterBindAccelerationStructures = null,
        null|int $maxDescriptorSetAccelerationStructures = null,
        null|int $maxDescriptorSetUpdateAfterBindAccelerationStructures = null,
        null|int $minAccelerationStructureScratchOffsetAlignment = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceAccelerationStructurePropertiesKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxGeometryCount)) $self->setMaxGeometryCount($maxGeometryCount);
        if(!is_null($maxInstanceCount)) $self->setMaxInstanceCount($maxInstanceCount);
        if(!is_null($maxPrimitiveCount)) $self->setMaxPrimitiveCount($maxPrimitiveCount);
        if(!is_null($maxPerStageDescriptorAccelerationStructures)) $self->setMaxPerStageDescriptorAccelerationStructures($maxPerStageDescriptorAccelerationStructures);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindAccelerationStructures)) $self->setMaxPerStageDescriptorUpdateAfterBindAccelerationStructures($maxPerStageDescriptorUpdateAfterBindAccelerationStructures);
        if(!is_null($maxDescriptorSetAccelerationStructures)) $self->setMaxDescriptorSetAccelerationStructures($maxDescriptorSetAccelerationStructures);
        if(!is_null($maxDescriptorSetUpdateAfterBindAccelerationStructures)) $self->setMaxDescriptorSetUpdateAfterBindAccelerationStructures($maxDescriptorSetUpdateAfterBindAccelerationStructures);
        if(!is_null($minAccelerationStructureScratchOffsetAlignment)) $self->setMinAccelerationStructureScratchOffsetAlignment($minAccelerationStructureScratchOffsetAlignment);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxGeometryCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxGeometryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxGeometryCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxGeometryCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxInstanceCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxInstanceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxInstanceCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxInstanceCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxPrimitiveCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPrimitiveCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPrimitiveCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPrimitiveCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorAccelerationStructures(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorAccelerationStructures;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorAccelerationStructures(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorAccelerationStructures = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindAccelerationStructures(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindAccelerationStructures;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindAccelerationStructures(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindAccelerationStructures = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetAccelerationStructures(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetAccelerationStructures;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetAccelerationStructures(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetAccelerationStructures = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindAccelerationStructures(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindAccelerationStructures;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindAccelerationStructures(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindAccelerationStructures = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinAccelerationStructureScratchOffsetAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minAccelerationStructureScratchOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinAccelerationStructureScratchOffsetAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minAccelerationStructureScratchOffsetAlignment = $cValue;
    }
}
