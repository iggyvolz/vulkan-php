<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBlitImageInfo2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcImage" => $this->getSrcImage(),
          "srcImageLayout" => $this->getSrcImageLayout(),
          "dstImage" => $this->getDstImage(),
          "dstImageLayout" => $this->getDstImageLayout(),
          "regionCount" => $this->getRegionCount(),
          "pRegions" => $this->getPRegions(),
          "filter" => $this->getFilter(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkImage $srcImage = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout = null,
        null|VkImage $dstImage = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout = null,
        null|int $regionCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pRegions = null,
        null|\iggyvolz\vulkan\enum\VkFilter $filter = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBlitImageInfo2', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcImage)) $self->setSrcImage($srcImage);
        if(!is_null($srcImageLayout)) $self->setSrcImageLayout($srcImageLayout);
        if(!is_null($dstImage)) $self->setDstImage($dstImage);
        if(!is_null($dstImageLayout)) $self->setDstImageLayout($dstImageLayout);
        if(!is_null($regionCount)) $self->setRegionCount($regionCount);
        if(!is_null($pRegions)) $self->setPRegions($pRegions);
        if(!is_null($filter)) $self->setFilter($filter);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkImage/
     */
    public function getSrcImage(): VkImage
    {
        $cValue = $this->cdata->srcImage;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcImage(VkImage $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->srcImage = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getSrcImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $cValue = $this->cdata->srcImageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setSrcImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->srcImageLayout = $cValue;
    }

    /**
     * VkImage/
     */
    public function getDstImage(): VkImage
    {
        $cValue = $this->cdata->dstImage;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setDstImage(VkImage $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->dstImage = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getDstImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $cValue = $this->cdata->dstImageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setDstImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->dstImageLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRegionCount(): int
    {
        $cValue = $this->cdata->regionCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRegionCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->regionCount = $cValue;
    }

    /**
     * VkImageBlit2* /
     */
    public function getPRegions(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pRegions;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImageBlit2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPRegions(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pRegions = $cValue;
    }

    /**
     * VkFilter/
     */
    public function getFilter(): \iggyvolz\vulkan\enum\VkFilter
    {
        $cValue = $this->cdata->filter;
        $phpValue = \iggyvolz\vulkan\enum\VkFilter::from($cValue);
        return $phpValue;
    }

    public function setFilter(\iggyvolz\vulkan\enum\VkFilter $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->filter = $cValue;
    }
}
