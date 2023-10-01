<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkStridedDeviceAddressRegionKHR
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
        null|int $deviceAddress = null,
        null|int $stride = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkStridedDeviceAddressRegionKHR', false), $vulkan->ffi);
        if(!is_null($deviceAddress)) $self->setDeviceAddress($deviceAddress);
        if(!is_null($stride)) $self->setStride($stride);
        if(!is_null($size)) $self->setSize($size);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getDeviceAddress(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceAddress(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stride = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }
}
