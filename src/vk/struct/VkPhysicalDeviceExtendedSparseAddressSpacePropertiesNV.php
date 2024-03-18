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
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceExtendedSparseAddressSpacePropertiesNV', false));
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
    public function getExtendedSparseAddressSpaceSize(): int
    {
        $cValue = $this->cdata->extendedSparseAddressSpaceSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setExtendedSparseAddressSpaceSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->extendedSparseAddressSpaceSize = $cValue;
    }

    /**
     * VkImageUsageFlags/
     */
    public function getExtendedSparseImageUsageFlags(): array
    {
        $cValue = $this->cdata->extendedSparseImageUsageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExtendedSparseImageUsageFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $this->cdata->extendedSparseImageUsageFlags = $cValue;
    }

    /**
     * VkBufferUsageFlags/
     */
    public function getExtendedSparseBufferUsageFlags(): array
    {
        $cValue = $this->cdata->extendedSparseBufferUsageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkBufferUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExtendedSparseBufferUsageFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkBufferUsageFlagBits::toInt(...$phpValue);
        $this->cdata->extendedSparseBufferUsageFlags = $cValue;
    }
}
