<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMetalBufferInfoEXT
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
        null|VkDeviceMemory $memory = null,
        mixed $mtlBuffer = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMetalBufferInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($memory)) $self->setMemory($memory);
        if(!is_null($mtlBuffer)) $self->setMtlBuffer($mtlBuffer);
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
     * VkDeviceMemory/
     */
    public function getMemory(): VkDeviceMemory
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memory;
        $phpValue = new \iggyvolz\vulkan\struct\VkDeviceMemory($cValue, $ffi);
        return $phpValue;
    }

    public function setMemory(VkDeviceMemory $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->memory = $cValue;
    }

    /**
     * void* /
     */
    public function getMtlBuffer(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mtlBuffer;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMtlBuffer(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->mtlBuffer = $cValue;
    }
}
