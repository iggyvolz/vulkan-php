<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevicePCIBusInfoPropertiesEXT
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
        null|int $pciDomain = null,
        null|int $pciBus = null,
        null|int $pciDevice = null,
        null|int $pciFunction = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevicePCIBusInfoPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pciDomain)) $self->setPciDomain($pciDomain);
        if(!is_null($pciBus)) $self->setPciBus($pciBus);
        if(!is_null($pciDevice)) $self->setPciDevice($pciDevice);
        if(!is_null($pciFunction)) $self->setPciFunction($pciFunction);
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
    public function getPciDomain(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pciDomain;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPciDomain(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pciDomain = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPciBus(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pciBus;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPciBus(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pciBus = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPciDevice(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pciDevice;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPciDevice(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pciDevice = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPciFunction(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pciFunction;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPciFunction(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pciFunction = $cValue;
    }
}
