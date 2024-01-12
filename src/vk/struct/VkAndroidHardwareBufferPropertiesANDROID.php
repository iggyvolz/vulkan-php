<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAndroidHardwareBufferPropertiesANDROID implements \JsonSerializable
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
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
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
        $self = new self( $vulkan->ffi->new('VkAndroidHardwareBufferPropertiesANDROID', false), $vulkan);
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
    public function getAllocationSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->allocationSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAllocationSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->allocationSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMemoryTypeBits(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->memoryTypeBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryTypeBits(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryTypeBits = $cValue;
    }
}
