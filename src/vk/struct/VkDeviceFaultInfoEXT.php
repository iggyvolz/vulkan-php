<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceFaultInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "description" => $this->getDescription(),
          "pAddressInfos" => $this->getPAddressInfos(),
          "pVendorInfos" => $this->getPVendorInfos(),
          "pVendorBinaryData" => $this->getPVendorBinaryData(),
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
        null|string $description = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pAddressInfos = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pVendorInfos = null,
        null|\iggyvolz\vulkan\util\Pointer $pVendorBinaryData = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceFaultInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($description)) $self->setDescription($description);
        if(!is_null($pAddressInfos)) $self->setPAddressInfos($pAddressInfos);
        if(!is_null($pVendorInfos)) $self->setPVendorInfos($pVendorInfos);
        if(!is_null($pVendorBinaryData)) $self->setPVendorBinaryData($pVendorBinaryData);
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
     * char/[256]
     */
    public function getDescription(): string
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->description;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDescription(string $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->description = $cValue;
    }

    /**
     * VkDeviceFaultAddressInfoEXT* /
     */
    public function getPAddressInfos(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pAddressInfos;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDeviceFaultAddressInfoEXT', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPAddressInfos(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pAddressInfos = $cValue;
    }

    /**
     * VkDeviceFaultVendorInfoEXT* /
     */
    public function getPVendorInfos(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pVendorInfos;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDeviceFaultVendorInfoEXT', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPVendorInfos(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pVendorInfos = $cValue;
    }

    /**
     * void* /
     */
    public function getPVendorBinaryData(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pVendorBinaryData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPVendorBinaryData(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pVendorBinaryData = $cValue;
    }
}
