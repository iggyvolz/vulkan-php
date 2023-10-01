<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceFaultCountsEXT
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|int $addressInfoCount = null,
        null|int $vendorInfoCount = null,
        null|int $vendorBinarySize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceFaultCountsEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($addressInfoCount)) $self->setAddressInfoCount($addressInfoCount);
        if(!is_null($vendorInfoCount)) $self->setVendorInfoCount($vendorInfoCount);
        if(!is_null($vendorBinarySize)) $self->setVendorBinarySize($vendorBinarySize);
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
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAddressInfoCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->addressInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAddressInfoCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->addressInfoCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVendorInfoCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vendorInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorInfoCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vendorInfoCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getVendorBinarySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vendorBinarySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorBinarySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vendorBinarySize = $cValue;
    }
}
