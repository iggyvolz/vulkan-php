<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceBufferDeviceAddressFeatures
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $bufferDeviceAddress = null,
        null|bool $bufferDeviceAddressCaptureReplay = null,
        null|bool $bufferDeviceAddressMultiDevice = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceBufferDeviceAddressFeatures', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($bufferDeviceAddress)) $self->setBufferDeviceAddress($bufferDeviceAddress);
        if(!is_null($bufferDeviceAddressCaptureReplay)) $self->setBufferDeviceAddressCaptureReplay($bufferDeviceAddressCaptureReplay);
        if(!is_null($bufferDeviceAddressMultiDevice)) $self->setBufferDeviceAddressMultiDevice($bufferDeviceAddressMultiDevice);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferDeviceAddress(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferDeviceAddress;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBufferDeviceAddress(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bufferDeviceAddress = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferDeviceAddressCaptureReplay(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferDeviceAddressCaptureReplay;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBufferDeviceAddressCaptureReplay(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bufferDeviceAddressCaptureReplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferDeviceAddressMultiDevice(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferDeviceAddressMultiDevice;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBufferDeviceAddressMultiDevice(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bufferDeviceAddressMultiDevice = $cValue;
    }
}
