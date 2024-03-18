<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkScreenBufferPropertiesQNX implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "allocationSize" => $this->getAllocationSize(),
          "memoryTypeBits" => $this->getMemoryTypeBits(),
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
        null|int $allocationSize = null,
        null|int $memoryTypeBits = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkScreenBufferPropertiesQNX', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($allocationSize)) $self->setAllocationSize($allocationSize);
        if(!is_null($memoryTypeBits)) $self->setMemoryTypeBits($memoryTypeBits);
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
    public function getAllocationSize(): int
    {
        $cValue = $this->cdata->allocationSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAllocationSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->allocationSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMemoryTypeBits(): int
    {
        $cValue = $this->cdata->memoryTypeBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryTypeBits(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->memoryTypeBits = $cValue;
    }
}
