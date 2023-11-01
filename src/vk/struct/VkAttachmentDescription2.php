<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAttachmentDescription2
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
        $self = new self( $vulkan->ffi->new('VkAttachmentDescription2', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
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
     * VkAttachmentDescriptionFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentDescriptionFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkAttachmentDescriptionFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getSamples(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->samples;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setSamples(\iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->samples = $cValue;
    }

    /**
     * VkAttachmentLoadOp/
     */
    public function getLoadOp(): \iggyvolz\vulkan\enum\VkAttachmentLoadOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->loadOp;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentLoadOp::from($cValue);
        return $phpValue;
    }

    public function setLoadOp(\iggyvolz\vulkan\enum\VkAttachmentLoadOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->loadOp = $cValue;
    }

    /**
     * VkAttachmentStoreOp/
     */
    public function getStoreOp(): \iggyvolz\vulkan\enum\VkAttachmentStoreOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storeOp;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentStoreOp::from($cValue);
        return $phpValue;
    }

    public function setStoreOp(\iggyvolz\vulkan\enum\VkAttachmentStoreOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->storeOp = $cValue;
    }

    /**
     * VkAttachmentLoadOp/
     */
    public function getStencilLoadOp(): \iggyvolz\vulkan\enum\VkAttachmentLoadOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stencilLoadOp;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentLoadOp::from($cValue);
        return $phpValue;
    }

    public function setStencilLoadOp(\iggyvolz\vulkan\enum\VkAttachmentLoadOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->stencilLoadOp = $cValue;
    }

    /**
     * VkAttachmentStoreOp/
     */
    public function getStencilStoreOp(): \iggyvolz\vulkan\enum\VkAttachmentStoreOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stencilStoreOp;
        $phpValue = \iggyvolz\vulkan\enum\VkAttachmentStoreOp::from($cValue);
        return $phpValue;
    }

    public function setStencilStoreOp(\iggyvolz\vulkan\enum\VkAttachmentStoreOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->stencilStoreOp = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getInitialLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->initialLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setInitialLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->initialLayout = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getFinalLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->finalLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setFinalLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->finalLayout = $cValue;
    }
}
