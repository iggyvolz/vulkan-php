<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayPlaneCapabilities2KHR
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
        null|VkDisplayPlaneCapabilitiesKHR $capabilities = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPlaneCapabilities2KHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($capabilities)) $self->setCapabilities($capabilities);
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
     * VkDisplayPlaneCapabilitiesKHR/
     */
    public function getCapabilities(): VkDisplayPlaneCapabilitiesKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->capabilities;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayPlaneCapabilitiesKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setCapabilities(VkDisplayPlaneCapabilitiesKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->capabilities = $cValue;
    }
}
