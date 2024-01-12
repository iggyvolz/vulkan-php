<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderingFragmentShadingRateAttachmentInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "imageView" => $this->getImageView(),
          "imageLayout" => $this->getImageLayout(),
          "shadingRateAttachmentTexelSize" => $this->getShadingRateAttachmentTexelSize(),
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
        null|VkImageView $imageView = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $imageLayout = null,
        null|VkExtent2D $shadingRateAttachmentTexelSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderingFragmentShadingRateAttachmentInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($imageView)) $self->setImageView($imageView);
        if(!is_null($imageLayout)) $self->setImageLayout($imageLayout);
        if(!is_null($shadingRateAttachmentTexelSize)) $self->setShadingRateAttachmentTexelSize($shadingRateAttachmentTexelSize);
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
     * VkImageView/
     */
    public function getImageView(): VkImageView
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageView;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageView($cValue, $ffi);
        return $phpValue;
    }

    public function setImageView(VkImageView $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageView = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageLayout = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getShadingRateAttachmentTexelSize(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shadingRateAttachmentTexelSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setShadingRateAttachmentTexelSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->shadingRateAttachmentTexelSize = $cValue;
    }
}
