<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyAccelerationStructureInfoKHR
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
        null|VkAccelerationStructureKHR $src = null,
        null|VkAccelerationStructureKHR $dst = null,
        null|\iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR $mode = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyAccelerationStructureInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($src)) $self->setSrc($src);
        if(!is_null($dst)) $self->setDst($dst);
        if(!is_null($mode)) $self->setMode($mode);
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
     * VkAccelerationStructureKHR/
     */
    public function getSrc(): VkAccelerationStructureKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->src;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setSrc(VkAccelerationStructureKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->src = $cValue;
    }

    /**
     * VkAccelerationStructureKHR/
     */
    public function getDst(): VkAccelerationStructureKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dst;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setDst(VkAccelerationStructureKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dst = $cValue;
    }

    /**
     * VkCopyAccelerationStructureModeKHR/
     */
    public function getMode(): \iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mode;
        $phpValue = \iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR::from($cValue);
        return $phpValue;
    }

    public function setMode(\iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->mode = $cValue;
    }
}
