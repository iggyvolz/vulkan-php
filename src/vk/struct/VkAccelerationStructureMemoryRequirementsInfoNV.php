<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureMemoryRequirementsInfoNV
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
        null|\iggyvolz\vulkan\enum\VkAccelerationStructureMemoryRequirementsTypeNV $type = null,
        null|VkAccelerationStructureNV $accelerationStructure = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureMemoryRequirementsInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($accelerationStructure)) $self->setAccelerationStructure($accelerationStructure);
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
     * VkAccelerationStructureMemoryRequirementsTypeNV/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkAccelerationStructureMemoryRequirementsTypeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkAccelerationStructureMemoryRequirementsTypeNV::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkAccelerationStructureMemoryRequirementsTypeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * VkAccelerationStructureNV/
     */
    public function getAccelerationStructure(): VkAccelerationStructureNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructure;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureNV($cValue, $ffi);
        return $phpValue;
    }

    public function setAccelerationStructure(VkAccelerationStructureNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->accelerationStructure = $cValue;
    }
}
