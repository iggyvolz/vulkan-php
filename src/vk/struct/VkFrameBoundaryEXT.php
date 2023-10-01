<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFrameBoundaryEXT
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
        mixed $flags = null,
        null|int $frameID = null,
        null|int $imageCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pImages = null,
        null|int $bufferCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBuffers = null,
        null|int $tagName = null,
        null|int $tagSize = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pTag = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFrameBoundaryEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($frameID)) $self->setFrameID($frameID);
        if(!is_null($imageCount)) $self->setImageCount($imageCount);
        if(!is_null($pImages)) $self->setPImages($pImages);
        if(!is_null($bufferCount)) $self->setBufferCount($bufferCount);
        if(!is_null($pBuffers)) $self->setPBuffers($pBuffers);
        if(!is_null($tagName)) $self->setTagName($tagName);
        if(!is_null($tagSize)) $self->setTagSize($tagSize);
        if(!is_null($pTag)) $self->setPTag($pTag);
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
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getFrameID(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->frameID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFrameID(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->frameID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->imageCount = $cValue;
    }

    /**
     * VkImage* /
     */
    public function getPImages(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pImages;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImage', $cValue, $ffi);
        return $phpValue;
    }

    public function setPImages(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferCount = $cValue;
    }

    /**
     * VkBuffer* /
     */
    public function getPBuffers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pBuffers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkBuffer', $cValue, $ffi);
        return $phpValue;
    }

    public function setPBuffers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pBuffers = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getTagName(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tagName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTagName(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->tagName = $cValue;
    }

    /**
     * size_t/
     */
    public function getTagSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tagSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTagSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->tagSize = $cValue;
    }

    /**
     * void* /
     */
    public function getPTag(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pTag;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPTag(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pTag = $cValue;
    }
}
