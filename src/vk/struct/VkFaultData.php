<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFaultData
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
        null|\iggyvolz\vulkan\enum\VkFaultLevel $faultLevel = null,
        null|\iggyvolz\vulkan\enum\VkFaultType $faultType = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFaultData', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($faultLevel)) $self->setFaultLevel($faultLevel);
        if(!is_null($faultType)) $self->setFaultType($faultType);
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
     * VkFaultLevel/
     */
    public function getFaultLevel(): \iggyvolz\vulkan\enum\VkFaultLevel
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->faultLevel;
        $phpValue = \iggyvolz\vulkan\enum\VkFaultLevel::from($cValue);
        return $phpValue;
    }

    public function setFaultLevel(\iggyvolz\vulkan\enum\VkFaultLevel $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->faultLevel = $cValue;
    }

    /**
     * VkFaultType/
     */
    public function getFaultType(): \iggyvolz\vulkan\enum\VkFaultType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->faultType;
        $phpValue = \iggyvolz\vulkan\enum\VkFaultType::from($cValue);
        return $phpValue;
    }

    public function setFaultType(\iggyvolz\vulkan\enum\VkFaultType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->faultType = $cValue;
    }
}
