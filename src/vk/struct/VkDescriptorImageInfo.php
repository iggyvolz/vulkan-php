<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorImageInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sampler" => $this->getSampler(),
          "imageView" => $this->getImageView(),
          "imageLayout" => $this->getImageLayout(),
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
        null|VkSampler $sampler = null,
        null|VkImageView $imageView = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $imageLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorImageInfo', false));
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
        $cValue = $this->cdata->sampler;
        $phpValue = new \iggyvolz\vulkan\struct\VkSampler($cValue, $ffi);
        return $phpValue;
    }

    public function setSampler(VkSampler $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->sampler = $cValue;
    }

    /**
     * VkImageView/
     */
    public function getImageView(): VkImageView
    {
        $cValue = $this->cdata->imageView;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageView($cValue, $ffi);
        return $phpValue;
    }

    public function setImageView(VkImageView $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->imageView = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $cValue = $this->cdata->imageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->imageLayout = $cValue;
    }
}
