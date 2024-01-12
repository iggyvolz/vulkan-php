<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageViewCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "image" => $this->getImage(),
          "viewType" => $this->getViewType(),
          "format" => $this->getFormat(),
          "components" => $this->getComponents(),
          "subresourceRange" => $this->getSubresourceRange(),
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
        null|VkImage $image = null,
        null|\iggyvolz\vulkan\enum\VkImageViewType $viewType = null,
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|VkComponentMapping $components = null,
        null|VkImageSubresourceRange $subresourceRange = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageViewCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($image)) $self->setImage($image);
        if(!is_null($viewType)) $self->setViewType($viewType);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($components)) $self->setComponents($components);
        if(!is_null($subresourceRange)) $self->setSubresourceRange($subresourceRange);
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
     * VkImageViewCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageViewCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageViewCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkImage/
     */
    public function getImage(): VkImage
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->image;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setImage(VkImage $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->image = $cValue;
    }

    /**
     * VkImageViewType/
     */
    public function getViewType(): \iggyvolz\vulkan\enum\VkImageViewType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->viewType;
        $phpValue = \iggyvolz\vulkan\enum\VkImageViewType::from($cValue);
        return $phpValue;
    }

    public function setViewType(\iggyvolz\vulkan\enum\VkImageViewType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->viewType = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * VkComponentMapping/
     */
    public function getComponents(): VkComponentMapping
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->components;
        $phpValue = new \iggyvolz\vulkan\struct\VkComponentMapping($cValue, $ffi);
        return $phpValue;
    }

    public function setComponents(VkComponentMapping $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->components = $cValue;
    }

    /**
     * VkImageSubresourceRange/
     */
    public function getSubresourceRange(): VkImageSubresourceRange
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subresourceRange;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceRange($cValue, $ffi);
        return $phpValue;
    }

    public function setSubresourceRange(VkImageSubresourceRange $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->subresourceRange = $cValue;
    }
}
