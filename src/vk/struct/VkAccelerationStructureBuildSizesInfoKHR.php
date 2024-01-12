<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureBuildSizesInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "accelerationStructureSize" => $this->getAccelerationStructureSize(),
          "updateScratchSize" => $this->getUpdateScratchSize(),
          "buildScratchSize" => $this->getBuildScratchSize(),
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
        null|int $accelerationStructureSize = null,
        null|int $updateScratchSize = null,
        null|int $buildScratchSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureBuildSizesInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($accelerationStructureSize)) $self->setAccelerationStructureSize($accelerationStructureSize);
        if(!is_null($updateScratchSize)) $self->setUpdateScratchSize($updateScratchSize);
        if(!is_null($buildScratchSize)) $self->setBuildScratchSize($buildScratchSize);
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
    public function getAccelerationStructureSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->accelerationStructureSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAccelerationStructureSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->accelerationStructureSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getUpdateScratchSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->updateScratchSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUpdateScratchSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->updateScratchSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getBuildScratchSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->buildScratchSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBuildScratchSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->buildScratchSize = $cValue;
    }
}
