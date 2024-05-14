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
    ) {
    }

    public static function create(
        \FFI $ffi,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|string $description = null,
        mixed $pAddressInfos = null,
        mixed $pVendorInfos = null,
        null|\iggyvolz\vulkan\util\Pointer $pVendorBinaryData = null,
    ): self {
        $self = new self( $ffi->new('VkDeviceFaultInfoEXT', false));
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
     * char/[256]
     */
    public function getDescription(): string
    {
        $cValue = $this->cdata->description;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDescription(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->description = $cValue;
    }

    /**
     * void* /
     */
    public function getPAddressInfos(): mixed
    {
        $cValue = $this->cdata->pAddressInfos;
        throw new \LogicException("Dummy transformer - VkDeviceFaultAddressInfoEXT*!");
        return $phpValue;
    }

    public function setPAddressInfos(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer - VkDeviceFaultAddressInfoEXT*!");
        $this->cdata->pAddressInfos = $cValue;
    }

    /**
     * void* /
     */
    public function getPVendorInfos(): mixed
    {
        $cValue = $this->cdata->pVendorInfos;
        throw new \LogicException("Dummy transformer - VkDeviceFaultVendorInfoEXT*!");
        return $phpValue;
    }

    public function setPVendorInfos(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer - VkDeviceFaultVendorInfoEXT*!");
        $this->cdata->pVendorInfos = $cValue;
    }

    /**
     * void* /
     */
    public function getPVendorBinaryData(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pVendorBinaryData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPVendorBinaryData(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pVendorBinaryData = $cValue;
    }
}
