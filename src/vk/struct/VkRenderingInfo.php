<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderingInfo
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
        mixed $flags = null,
        null|VkRect2D $renderArea = null,
        null|int $layerCount = null,
        null|int $viewMask = null,
        null|int $colorAttachmentCount = null,
        mixed $pColorAttachments = null,
        mixed $pDepthAttachment = null,
        mixed $pStencilAttachment = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderingInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($renderArea)) $self->setRenderArea($renderArea);
        if(!is_null($layerCount)) $self->setLayerCount($layerCount);
        if(!is_null($viewMask)) $self->setViewMask($viewMask);
        if(!is_null($colorAttachmentCount)) $self->setColorAttachmentCount($colorAttachmentCount);
        if(!is_null($pColorAttachments)) $self->setPColorAttachments($pColorAttachments);
        if(!is_null($pDepthAttachment)) $self->setPDepthAttachment($pDepthAttachment);
        if(!is_null($pStencilAttachment)) $self->setPStencilAttachment($pStencilAttachment);
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
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * VkRect2D/
     */
    public function getRenderArea(): VkRect2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->renderArea;
        $phpValue = new \iggyvolz\vulkan\struct\VkRect2D($cValue, $ffi);
        return $phpValue;
    }

    public function setRenderArea(VkRect2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->renderArea = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayerCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLayerCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->layerCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getViewMask(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->viewMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewMask(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->viewMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getColorAttachmentCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->colorAttachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setColorAttachmentCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->colorAttachmentCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPColorAttachments(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pColorAttachments;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPColorAttachments(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pColorAttachments = $cValue;
    }

    /**
     * void* /
     */
    public function getPDepthAttachment(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pDepthAttachment;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPDepthAttachment(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pDepthAttachment = $cValue;
    }

    /**
     * void* /
     */
    public function getPStencilAttachment(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStencilAttachment;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPStencilAttachment(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pStencilAttachment = $cValue;
    }
}
