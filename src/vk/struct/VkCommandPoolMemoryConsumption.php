<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCommandPoolMemoryConsumption implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "commandPoolAllocated" => $this->getCommandPoolAllocated(),
          "commandPoolReservedSize" => $this->getCommandPoolReservedSize(),
          "commandBufferAllocated" => $this->getCommandBufferAllocated(),
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
        null|int $commandPoolAllocated = null,
        null|int $commandPoolReservedSize = null,
        null|int $commandBufferAllocated = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCommandPoolMemoryConsumption', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($commandPoolAllocated)) $self->setCommandPoolAllocated($commandPoolAllocated);
        if(!is_null($commandPoolReservedSize)) $self->setCommandPoolReservedSize($commandPoolReservedSize);
        if(!is_null($commandBufferAllocated)) $self->setCommandBufferAllocated($commandBufferAllocated);
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
    public function getCommandPoolAllocated(): int
    {
        $cValue = $this->cdata->commandPoolAllocated;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandPoolAllocated(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->commandPoolAllocated = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getCommandPoolReservedSize(): int
    {
        $cValue = $this->cdata->commandPoolReservedSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandPoolReservedSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->commandPoolReservedSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getCommandBufferAllocated(): int
    {
        $cValue = $this->cdata->commandBufferAllocated;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandBufferAllocated(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->commandBufferAllocated = $cValue;
    }
}
