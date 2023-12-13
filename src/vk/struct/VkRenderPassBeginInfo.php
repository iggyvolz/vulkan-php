<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassBeginInfo
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
        null|VkRenderPass $renderPass = null,
        null|VkFramebuffer $framebuffer = null,
        null|VkRect2D $renderArea = null,
        null|int $clearValueCount = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pClearValues = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderPassBeginInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($renderPass)) $self->setRenderPass($renderPass);
        if(!is_null($framebuffer)) $self->setFramebuffer($framebuffer);
        if(!is_null($renderArea)) $self->setRenderArea($renderArea);
        if(!is_null($clearValueCount)) $self->setClearValueCount($clearValueCount);
        if(!is_null($pClearValues)) $self->setPClearValues($pClearValues);
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
     * VkRenderPass/
     */
    public function getRenderPass(): VkRenderPass
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->renderPass;
        $phpValue = new \iggyvolz\vulkan\struct\VkRenderPass($cValue, $ffi);
        return $phpValue;
    }

    public function setRenderPass(VkRenderPass $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->renderPass = $cValue;
    }

    /**
     * VkFramebuffer/
     */
    public function getFramebuffer(): VkFramebuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->framebuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkFramebuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setFramebuffer(VkFramebuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->framebuffer = $cValue;
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
    public function getClearValueCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->clearValueCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setClearValueCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->clearValueCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPClearValues(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pClearValues;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPClearValues(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pClearValues = $cValue;
    }
}
