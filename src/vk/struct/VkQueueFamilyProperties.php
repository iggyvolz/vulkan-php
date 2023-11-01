<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkQueueFamilyProperties
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|array $queueFlags = null,
        null|int $queueCount = null,
        null|int $timestampValidBits = null,
        null|VkExtent3D $minImageTransferGranularity = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkQueueFamilyProperties', false), $vulkan->ffi);
        if(!is_null($queueFlags)) $self->setQueueFlags($queueFlags);
        if(!is_null($queueCount)) $self->setQueueCount($queueCount);
        if(!is_null($timestampValidBits)) $self->setTimestampValidBits($timestampValidBits);
        if(!is_null($minImageTransferGranularity)) $self->setMinImageTransferGranularity($minImageTransferGranularity);
        return $self;
    }

    /**
     * VkQueueFlags/
     */
    public function getQueueFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->queueFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkQueueFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setQueueFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkQueueFlagBits::toInt(...$phpValue);
        $this->cdata->queueFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueueCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->queueCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->queueCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTimestampValidBits(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->timestampValidBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTimestampValidBits(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->timestampValidBits = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getMinImageTransferGranularity(): VkExtent3D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minImageTransferGranularity;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinImageTransferGranularity(VkExtent3D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minImageTransferGranularity = $cValue;
    }
}
