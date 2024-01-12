<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceAddressBindingCallbackDataEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "baseAddress" => $this->getBaseAddress(),
          "size" => $this->getSize(),
          "bindingType" => $this->getBindingType(),
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
        null|array $flags = null,
        null|int $baseAddress = null,
        null|int $size = null,
        null|\iggyvolz\vulkan\enum\VkDeviceAddressBindingTypeEXT $bindingType = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceAddressBindingCallbackDataEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($baseAddress)) $self->setBaseAddress($baseAddress);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($bindingType)) $self->setBindingType($bindingType);
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
     * VkDeviceAddressBindingFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkDeviceAddressBindingFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkDeviceAddressBindingFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getBaseAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->baseAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->baseAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }

    /**
     * VkDeviceAddressBindingTypeEXT/
     */
    public function getBindingType(): \iggyvolz\vulkan\enum\VkDeviceAddressBindingTypeEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bindingType;
        $phpValue = \iggyvolz\vulkan\enum\VkDeviceAddressBindingTypeEXT::from($cValue);
        return $phpValue;
    }

    public function setBindingType(\iggyvolz\vulkan\enum\VkDeviceAddressBindingTypeEXT $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->bindingType = $cValue;
    }
}
