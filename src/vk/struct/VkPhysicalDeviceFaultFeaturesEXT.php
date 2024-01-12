<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFaultFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "deviceFault" => $this->getDeviceFault(),
          "deviceFaultVendorBinary" => $this->getDeviceFaultVendorBinary(),
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
        null|bool $deviceFault = null,
        null|bool $deviceFaultVendorBinary = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFaultFeaturesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($deviceFault)) $self->setDeviceFault($deviceFault);
        if(!is_null($deviceFaultVendorBinary)) $self->setDeviceFaultVendorBinary($deviceFaultVendorBinary);
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
     * uint32_t/
     */
    public function getDeviceFault(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceFault;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceFault(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceFault = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceFaultVendorBinary(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceFaultVendorBinary;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceFaultVendorBinary(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceFaultVendorBinary = $cValue;
    }
}
