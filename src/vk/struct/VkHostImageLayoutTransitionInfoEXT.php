<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkHostImageLayoutTransitionInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "image" => $this->getImage(),
          "oldLayout" => $this->getOldLayout(),
          "newLayout" => $this->getNewLayout(),
          "subresourceRange" => $this->getSubresourceRange(),
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
        null|VkImage $image = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $oldLayout = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $newLayout = null,
        null|VkImageSubresourceRange $subresourceRange = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkHostImageLayoutTransitionInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($image)) $self->setImage($image);
        if(!is_null($oldLayout)) $self->setOldLayout($oldLayout);
        if(!is_null($newLayout)) $self->setNewLayout($newLayout);
        if(!is_null($subresourceRange)) $self->setSubresourceRange($subresourceRange);
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
    public function getImage(): VkImage
    {
        $cValue = $this->cdata->image;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setImage(VkImage $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->image = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getOldLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $cValue = $this->cdata->oldLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setOldLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->oldLayout = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getNewLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $cValue = $this->cdata->newLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setNewLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->newLayout = $cValue;
    }

    /**
     * VkImageSubresourceRange/
     */
    public function getSubresourceRange(): VkImageSubresourceRange
    {
        $cValue = $this->cdata->subresourceRange;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceRange($cValue, $ffi);
        return $phpValue;
    }

    public function setSubresourceRange(VkImageSubresourceRange $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->subresourceRange = $cValue;
    }
}
