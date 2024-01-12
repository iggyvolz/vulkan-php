<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceFaultCountsEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "addressInfoCount" => $this->getAddressInfoCount(),
          "vendorInfoCount" => $this->getVendorInfoCount(),
          "vendorBinarySize" => $this->getVendorBinarySize(),
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
        null|int $addressInfoCount = null,
        null|int $vendorInfoCount = null,
        null|int $vendorBinarySize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceFaultCountsEXT', false), $vulkan);
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
    public function getAddressInfoCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->addressInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAddressInfoCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->addressInfoCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVendorInfoCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vendorInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorInfoCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->vendorInfoCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getVendorBinarySize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vendorBinarySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorBinarySize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->vendorBinarySize = $cValue;
    }
}
