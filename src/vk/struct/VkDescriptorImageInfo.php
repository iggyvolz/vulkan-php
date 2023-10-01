<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorImageInfo
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
        null|VkSampler $sampler = null,
        null|VkImageView $imageView = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $imageLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorImageInfo', false), $vulkan->ffi);
        if(!is_null($sampler)) $self->setSampler($sampler);
        if(!is_null($imageView)) $self->setImageView($imageView);
        if(!is_null($imageLayout)) $self->setImageLayout($imageLayout);
        return $self;
    }

    /**
     * VkSampler/
     */
    public function getSampler(): VkSampler
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sampler;
        $phpValue = new \iggyvolz\vulkan\struct\VkSampler($cValue, $ffi);
        return $phpValue;
    }

    public function setSampler(VkSampler $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->sampler = $cValue;
    }

    /**
     * VkImageView/
     */
    public function getImageView(): VkImageView
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageView;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageView($cValue, $ffi);
        return $phpValue;
    }

    public function setImageView(VkImageView $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageView = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageLayout = $cValue;
    }
}
