<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoReferenceSlotInfoKHR
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
        null|int $slotIndex = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPictureResource = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoReferenceSlotInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($slotIndex)) $self->setSlotIndex($slotIndex);
        if(!is_null($pPictureResource)) $self->setPPictureResource($pPictureResource);
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
     * int32_t/
     */
    public function getSlotIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->slotIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSlotIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->slotIndex = $cValue;
    }

    /**
     * VkVideoPictureResourceInfoKHR* /
     */
    public function getPPictureResource(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPictureResource;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVideoPictureResourceInfoKHR', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPictureResource(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPictureResource = $cValue;
    }
}
