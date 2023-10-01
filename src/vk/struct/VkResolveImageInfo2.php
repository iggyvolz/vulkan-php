<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkResolveImageInfo2
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
        null|VkImage $srcImage = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout = null,
        null|VkImage $dstImage = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout = null,
        null|int $regionCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pRegions = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkResolveImageInfo2', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcImage)) $self->setSrcImage($srcImage);
        if(!is_null($srcImageLayout)) $self->setSrcImageLayout($srcImageLayout);
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
     * VkImage/
     */
    public function getSrcImage(): VkImage
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcImage;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcImage(VkImage $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcImage = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getSrcImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcImageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setSrcImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->srcImageLayout = $cValue;
    }

    /**
     * VkImage/
     */
    public function getDstImage(): VkImage
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstImage;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setDstImage(VkImage $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstImage = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getDstImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstImageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setDstImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->dstImageLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRegionCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->regionCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRegionCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->regionCount = $cValue;
    }

    /**
     * VkImageResolve2* /
     */
    public function getPRegions(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pRegions;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImageResolve2', $cValue, $ffi);
        return $phpValue;
    }

    public function setPRegions(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pRegions = $cValue;
    }
}
