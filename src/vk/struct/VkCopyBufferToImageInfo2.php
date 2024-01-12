<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyBufferToImageInfo2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcBuffer" => $this->getSrcBuffer(),
          "dstImage" => $this->getDstImage(),
          "dstImageLayout" => $this->getDstImageLayout(),
          "regionCount" => $this->getRegionCount(),
          "pRegions" => $this->getPRegions(),
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
        null|VkBuffer $srcBuffer = null,
        null|VkImage $dstImage = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout = null,
        null|int $regionCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pRegions = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyBufferToImageInfo2', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcBuffer)) $self->setSrcBuffer($srcBuffer);
        if(!is_null($dstImage)) $self->setDstImage($dstImage);
        if(!is_null($dstImageLayout)) $self->setDstImageLayout($dstImageLayout);
        if(!is_null($regionCount)) $self->setRegionCount($regionCount);
        if(!is_null($pRegions)) $self->setPRegions($pRegions);
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
     * VkBuffer/
     */
    public function getSrcBuffer(): VkBuffer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcBuffer = $cValue;
    }

    /**
     * VkImage/
     */
    public function getDstImage(): VkImage
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstImage;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setDstImage(VkImage $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstImage = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getDstImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstImageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setDstImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->dstImageLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRegionCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->regionCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRegionCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->regionCount = $cValue;
    }

    /**
     * VkBufferImageCopy2* /
     */
    public function getPRegions(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pRegions;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkBufferImageCopy2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPRegions(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pRegions = $cValue;
    }
}
