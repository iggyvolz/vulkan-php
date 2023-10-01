<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageToMemoryCopyEXT
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pHostPointer = null,
        null|int $memoryRowLength = null,
        null|int $memoryImageHeight = null,
        null|VkImageSubresourceLayers $imageSubresource = null,
        null|VkOffset3D $imageOffset = null,
        null|VkExtent3D $imageExtent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageToMemoryCopyEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pHostPointer)) $self->setPHostPointer($pHostPointer);
        if(!is_null($memoryRowLength)) $self->setMemoryRowLength($memoryRowLength);
        if(!is_null($memoryImageHeight)) $self->setMemoryImageHeight($memoryImageHeight);
        if(!is_null($imageSubresource)) $self->setImageSubresource($imageSubresource);
        if(!is_null($imageOffset)) $self->setImageOffset($imageOffset);
        if(!is_null($imageExtent)) $self->setImageExtent($imageExtent);
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
     * void* /
     */
    public function getPHostPointer(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pHostPointer;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPHostPointer(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pHostPointer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMemoryRowLength(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memoryRowLength;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryRowLength(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryRowLength = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMemoryImageHeight(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memoryImageHeight;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryImageHeight(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryImageHeight = $cValue;
    }

    /**
     * VkImageSubresourceLayers/
     */
    public function getImageSubresource(): VkImageSubresourceLayers
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setImageSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageSubresource = $cValue;
    }

    /**
     * VkOffset3D/
     */
    public function getImageOffset(): VkOffset3D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageOffset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset3D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageOffset(VkOffset3D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageOffset = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getImageExtent(): VkExtent3D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageExtent(VkExtent3D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageExtent = $cValue;
    }
}
