<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAttachmentDescriptionStencilLayout
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
        null|\iggyvolz\vulkan\enum\VkImageLayout $stencilInitialLayout = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $stencilFinalLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAttachmentDescriptionStencilLayout', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stencilInitialLayout)) $self->setStencilInitialLayout($stencilInitialLayout);
        if(!is_null($stencilFinalLayout)) $self->setStencilFinalLayout($stencilFinalLayout);
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
     * VkImageLayout/
     */
    public function getStencilInitialLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stencilInitialLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setStencilInitialLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->stencilInitialLayout = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getStencilFinalLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stencilFinalLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setStencilFinalLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->stencilFinalLayout = $cValue;
    }
}
