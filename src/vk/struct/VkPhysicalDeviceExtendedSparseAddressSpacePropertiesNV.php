<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceExtendedSparseAddressSpacePropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "extendedSparseAddressSpaceSize" => $this->getExtendedSparseAddressSpaceSize(),
          "extendedSparseImageUsageFlags" => $this->getExtendedSparseImageUsageFlags(),
          "extendedSparseBufferUsageFlags" => $this->getExtendedSparseBufferUsageFlags(),
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
        null|int $extendedSparseAddressSpaceSize = null,
        null|array $extendedSparseImageUsageFlags = null,
        null|array $extendedSparseBufferUsageFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceExtendedSparseAddressSpacePropertiesNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($extendedSparseAddressSpaceSize)) $self->setExtendedSparseAddressSpaceSize($extendedSparseAddressSpaceSize);
        if(!is_null($extendedSparseImageUsageFlags)) $self->setExtendedSparseImageUsageFlags($extendedSparseImageUsageFlags);
        if(!is_null($extendedSparseBufferUsageFlags)) $self->setExtendedSparseBufferUsageFlags($extendedSparseBufferUsageFlags);
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
    public function getExtendedSparseAddressSpaceSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->extendedSparseAddressSpaceSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setExtendedSparseAddressSpaceSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->extendedSparseAddressSpaceSize = $cValue;
    }

    /**
     * VkImageUsageFlags/
     */
    public function getExtendedSparseImageUsageFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->extendedSparseImageUsageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExtendedSparseImageUsageFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $this->cdata->extendedSparseImageUsageFlags = $cValue;
    }

    /**
     * VkBufferUsageFlags/
     */
    public function getExtendedSparseBufferUsageFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->extendedSparseBufferUsageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkBufferUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExtendedSparseBufferUsageFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkBufferUsageFlagBits::toInt(...$phpValue);
        $this->cdata->extendedSparseBufferUsageFlags = $cValue;
    }
}
