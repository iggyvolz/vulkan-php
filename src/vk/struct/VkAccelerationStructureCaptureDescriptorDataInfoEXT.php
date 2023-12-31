<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureCaptureDescriptorDataInfoEXT
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
        null|VkAccelerationStructureKHR $accelerationStructure = null,
        null|VkAccelerationStructureNV $accelerationStructureNV = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureCaptureDescriptorDataInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($accelerationStructure)) $self->setAccelerationStructure($accelerationStructure);
        if(!is_null($accelerationStructureNV)) $self->setAccelerationStructureNV($accelerationStructureNV);
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
     * VkAccelerationStructureKHR/
     */
    public function getAccelerationStructure(): VkAccelerationStructureKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructure;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setAccelerationStructure(VkAccelerationStructureKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->accelerationStructure = $cValue;
    }

    /**
     * VkAccelerationStructureNV/
     */
    public function getAccelerationStructureNV(): VkAccelerationStructureNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructureNV;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureNV($cValue, $ffi);
        return $phpValue;
    }

    public function setAccelerationStructureNV(VkAccelerationStructureNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->accelerationStructureNV = $cValue;
    }
}
