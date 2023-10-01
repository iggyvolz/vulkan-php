<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageViewSlicedCreateInfoEXT
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
        null|int $sliceOffset = null,
        null|int $sliceCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageViewSlicedCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($sliceOffset)) $self->setSliceOffset($sliceOffset);
        if(!is_null($sliceCount)) $self->setSliceCount($sliceCount);
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
    public function getSliceOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sliceOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSliceOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sliceOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSliceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sliceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSliceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sliceCount = $cValue;
    }
}
