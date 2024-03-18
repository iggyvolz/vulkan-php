<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkWriteDescriptorSetAccelerationStructureKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "accelerationStructureCount" => $this->getAccelerationStructureCount(),
          "pAccelerationStructures" => $this->getPAccelerationStructures(),
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
        null|int $accelerationStructureCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pAccelerationStructures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkWriteDescriptorSetAccelerationStructureKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($accelerationStructureCount)) $self->setAccelerationStructureCount($accelerationStructureCount);
        if(!is_null($pAccelerationStructures)) $self->setPAccelerationStructures($pAccelerationStructures);
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
    public function getAccelerationStructureCount(): int
    {
        $cValue = $this->cdata->accelerationStructureCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAccelerationStructureCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->accelerationStructureCount = $cValue;
    }

    /**
     * VkAccelerationStructureKHR* /
     */
    public function getPAccelerationStructures(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pAccelerationStructures;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAccelerationStructureKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPAccelerationStructures(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAccelerationStructures = $cValue;
    }
}
