<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMaintenance3Properties
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
        null|int $maxPerSetDescriptors = null,
        null|int $maxMemoryAllocationSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMaintenance3Properties', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxPerSetDescriptors)) $self->setMaxPerSetDescriptors($maxPerSetDescriptors);
        if(!is_null($maxMemoryAllocationSize)) $self->setMaxMemoryAllocationSize($maxMemoryAllocationSize);
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
     * uint32_t/
     */
    public function getMaxPerSetDescriptors(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerSetDescriptors;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerSetDescriptors(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerSetDescriptors = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxMemoryAllocationSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMemoryAllocationSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMemoryAllocationSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMemoryAllocationSize = $cValue;
    }
}
