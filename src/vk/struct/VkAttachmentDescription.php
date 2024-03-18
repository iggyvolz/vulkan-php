<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAttachmentDescription implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "flags" => $this->getFlags(),
          "format" => $this->getFormat(),
          "samples" => $this->getSamples(),
          "loadOp" => $this->getLoadOp(),
          "storeOp" => $this->getStoreOp(),
          "stencilLoadOp" => $this->getStencilLoadOp(),
          "stencilStoreOp" => $this->getStencilStoreOp(),
          "initialLayout" => $this->getInitialLayout(),
          "finalLayout" => $this->getFinalLayout(),
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
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples = null,
        null|\iggyvolz\vulkan\enum\VkAttachmentLoadOp $loadOp = null,
        null|\iggyvolz\vulkan\enum\VkAttachmentStoreOp $storeOp = null,
        null|\iggyvolz\vulkan\enum\VkAttachmentLoadOp $stencilLoadOp = null,
        null|\iggyvolz\vulkan\enum\VkAttachmentStoreOp $stencilStoreOp = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $initialLayout = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $finalLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAttachmentDescription', false));
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($samples)) $self->setSamples($samples);
        if(!is_null($loadOp)) $self->setLoadOp($loadOp);
        if(!is_null($storeOp)) $self->setStoreOp($storeOp);
        if(!is_null($stencilLoadOp)) $self->setStencilLoadOp($stencilLoadOp);
        if(!is_null($stencilStoreOp)) $self->setStencilStoreOp($stencilStoreOp);
        if(!is_null($initialLayout)) $self->setInitialLayout($initialLayout);
        if(!is_null($finalLayout)) $self->setFinalLayout($finalLayout);
        return $self;
    }

    /**
     * VkAttachmentDescriptionFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentDescriptionFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkAttachmentDescriptionFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getSamples(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $cValue = $this->cdata->samples;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setSamples(\iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->samples = $cValue;
    }

    /**
     * VkAttachmentLoadOp/
     */
    public function getLoadOp(): \iggyvolz\vulkan\enum\VkAttachmentLoadOp
    {
        $cValue = $this->cdata->loadOp;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentLoadOp::from($cValue);
        return $phpValue;
    }

    public function setLoadOp(\iggyvolz\vulkan\enum\VkAttachmentLoadOp $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->loadOp = $cValue;
    }

    /**
     * VkAttachmentStoreOp/
     */
    public function getStoreOp(): \iggyvolz\vulkan\enum\VkAttachmentStoreOp
    {
        $cValue = $this->cdata->storeOp;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentStoreOp::from($cValue);
        return $phpValue;
    }

    public function setStoreOp(\iggyvolz\vulkan\enum\VkAttachmentStoreOp $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->storeOp = $cValue;
    }

    /**
     * VkAttachmentLoadOp/
     */
    public function getStencilLoadOp(): \iggyvolz\vulkan\enum\VkAttachmentLoadOp
    {
        $cValue = $this->cdata->stencilLoadOp;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentLoadOp::from($cValue);
        return $phpValue;
    }

    public function setStencilLoadOp(\iggyvolz\vulkan\enum\VkAttachmentLoadOp $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->stencilLoadOp = $cValue;
    }

    /**
     * VkAttachmentStoreOp/
     */
    public function getStencilStoreOp(): \iggyvolz\vulkan\enum\VkAttachmentStoreOp
    {
        $cValue = $this->cdata->stencilStoreOp;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentStoreOp::from($cValue);
        return $phpValue;
    }

    public function setStencilStoreOp(\iggyvolz\vulkan\enum\VkAttachmentStoreOp $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->stencilStoreOp = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getInitialLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $cValue = $this->cdata->initialLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setInitialLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->initialLayout = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getFinalLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $cValue = $this->cdata->finalLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setFinalLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->finalLayout = $cValue;
    }
}
