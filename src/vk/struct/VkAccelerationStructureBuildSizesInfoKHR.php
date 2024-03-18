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
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureBuildSizesInfoKHR', false));
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
     * uint64_t/
     */
    public function getAccelerationStructureSize(): int
    {
        $cValue = $this->cdata->accelerationStructureSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAccelerationStructureSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->accelerationStructureSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getUpdateScratchSize(): int
    {
        $cValue = $this->cdata->updateScratchSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUpdateScratchSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->updateScratchSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getBuildScratchSize(): int
    {
        $cValue = $this->cdata->buildScratchSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBuildScratchSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->buildScratchSize = $cValue;
    }
}
