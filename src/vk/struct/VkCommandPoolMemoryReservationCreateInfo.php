<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCommandPoolMemoryReservationCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "commandPoolReservedSize" => $this->getCommandPoolReservedSize(),
          "commandPoolMaxCommandBuffers" => $this->getCommandPoolMaxCommandBuffers(),
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
        null|int $commandPoolReservedSize = null,
        null|int $commandPoolMaxCommandBuffers = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCommandPoolMemoryReservationCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($commandPoolReservedSize)) $self->setCommandPoolReservedSize($commandPoolReservedSize);
        if(!is_null($commandPoolMaxCommandBuffers)) $self->setCommandPoolMaxCommandBuffers($commandPoolMaxCommandBuffers);
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
    public function getCommandPoolReservedSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->commandPoolReservedSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandPoolReservedSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->commandPoolReservedSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandPoolMaxCommandBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->commandPoolMaxCommandBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandPoolMaxCommandBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->commandPoolMaxCommandBuffers = $cValue;
    }
}
