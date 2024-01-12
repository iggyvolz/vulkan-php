<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFrameBoundaryEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "frameID" => $this->getFrameID(),
          "imageCount" => $this->getImageCount(),
          "pImages" => $this->getPImages(),
          "bufferCount" => $this->getBufferCount(),
          "pBuffers" => $this->getPBuffers(),
          "tagName" => $this->getTagName(),
          "tagSize" => $this->getTagSize(),
          "pTag" => $this->getPTag(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|int $frameID = null,
        null|int $imageCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pImages = null,
        null|int $bufferCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBuffers = null,
        null|int $tagName = null,
        null|int $tagSize = null,
        null|\iggyvolz\vulkan\util\Pointer $pTag = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFrameBoundaryEXT', false), $vulkan);
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
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkFrameBoundaryFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkFrameBoundaryFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFrameBoundaryFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getFrameID(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->frameID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFrameID(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->frameID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->imageCount = $cValue;
    }

    /**
     * VkImage* /
     */
    public function getPImages(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pImages;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImage', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPImages(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferCount = $cValue;
    }

    /**
     * VkBuffer* /
     */
    public function getPBuffers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pBuffers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkBuffer', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPBuffers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pBuffers = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getTagName(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->tagName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTagName(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->tagName = $cValue;
    }

    /**
     * size_t/
     */
    public function getTagSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->tagSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTagSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->tagSize = $cValue;
    }

    /**
     * void* /
     */
    public function getPTag(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pTag;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPTag(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pTag = $cValue;
    }
}
