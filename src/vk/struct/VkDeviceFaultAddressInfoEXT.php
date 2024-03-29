<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceFaultAddressInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "addressType" => $this->getAddressType(),
          "reportedAddress" => $this->getReportedAddress(),
          "addressPrecision" => $this->getAddressPrecision(),
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
        null|\iggyvolz\vulkan\enum\VkDeviceFaultAddressTypeEXT $addressType = null,
        null|int $reportedAddress = null,
        null|int $addressPrecision = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceFaultAddressInfoEXT', false), $vulkan);
        if(!is_null($addressType)) $self->setAddressType($addressType);
        if(!is_null($reportedAddress)) $self->setReportedAddress($reportedAddress);
        if(!is_null($addressPrecision)) $self->setAddressPrecision($addressPrecision);
        return $self;
    }

    /**
     * VkDeviceFaultAddressTypeEXT/
     */
    public function getAddressType(): \iggyvolz\vulkan\enum\VkDeviceFaultAddressTypeEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->addressType;
        $phpValue = \iggyvolz\vulkan\enum\VkDeviceFaultAddressTypeEXT::from($cValue);
        return $phpValue;
    }

    public function setAddressType(\iggyvolz\vulkan\enum\VkDeviceFaultAddressTypeEXT $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->addressType = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getReportedAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->reportedAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setReportedAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->reportedAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getAddressPrecision(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->addressPrecision;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAddressPrecision(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->addressPrecision = $cValue;
    }
}
