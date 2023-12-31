<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderingAttachmentInfo
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkImageView $imageView = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $imageLayout = null,
        null|\iggyvolz\vulkan\enum\VkResolveModeFlagBits $resolveMode = null,
        null|VkImageView $resolveImageView = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $resolveImageLayout = null,
        null|\iggyvolz\vulkan\enum\VkAttachmentLoadOp $loadOp = null,
        null|\iggyvolz\vulkan\enum\VkAttachmentStoreOp $storeOp = null,
        mixed $clearValue = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderingAttachmentInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($imageView)) $self->setImageView($imageView);
        if(!is_null($imageLayout)) $self->setImageLayout($imageLayout);
        if(!is_null($resolveMode)) $self->setResolveMode($resolveMode);
        if(!is_null($resolveImageView)) $self->setResolveImageView($resolveImageView);
        if(!is_null($resolveImageLayout)) $self->setResolveImageLayout($resolveImageLayout);
        if(!is_null($loadOp)) $self->setLoadOp($loadOp);
        if(!is_null($storeOp)) $self->setStoreOp($storeOp);
        if(!is_null($clearValue)) $self->setClearValue($clearValue);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
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

    /**
     * VkResolveModeFlagBits/
     */
    public function getResolveMode(): \iggyvolz\vulkan\enum\VkResolveModeFlagBits
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->resolveMode;
        $phpValue = \iggyvolz\vulkan\enum\VkResolveModeFlagBits::from($cValue);
        return $phpValue;
    }

    public function setResolveMode(\iggyvolz\vulkan\enum\VkResolveModeFlagBits $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->resolveMode = $cValue;
    }

    /**
     * VkImageView/
     */
    public function getResolveImageView(): VkImageView
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->resolveImageView;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageView($cValue, $ffi);
        return $phpValue;
    }

    public function setResolveImageView(VkImageView $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->resolveImageView = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getResolveImageLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->resolveImageLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setResolveImageLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->resolveImageLayout = $cValue;
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
     * void* /
     */
    public function getClearValue(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->clearValue;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setClearValue(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->clearValue = $cValue;
    }
}
