<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCommandBufferInheritanceInfo
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
        null|int $subpass = null,
        null|VkFramebuffer $framebuffer = null,
        null|bool $occlusionQueryEnable = null,
        null|array $queryFlags = null,
        null|array $pipelineStatistics = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCommandBufferInheritanceInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($renderPass)) $self->setRenderPass($renderPass);
        if(!is_null($subpass)) $self->setSubpass($subpass);
        if(!is_null($framebuffer)) $self->setFramebuffer($framebuffer);
        if(!is_null($occlusionQueryEnable)) $self->setOcclusionQueryEnable($occlusionQueryEnable);
        if(!is_null($queryFlags)) $self->setQueryFlags($queryFlags);
        if(!is_null($pipelineStatistics)) $self->setPipelineStatistics($pipelineStatistics);
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
     * uint32_t/
     */
    public function getSubpass(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subpass;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubpass(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->subpass = $cValue;
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
     * uint32_t/
     */
    public function getOcclusionQueryEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->occlusionQueryEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setOcclusionQueryEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->occlusionQueryEnable = $cValue;
    }

    /**
     * VkQueryControlFlags/
     */
    public function getQueryFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->queryFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setQueryFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::toInt(...$phpValue);
        $this->cdata->queryFlags = $cValue;
    }

    /**
     * VkQueryPipelineStatisticFlags/
     */
    public function getPipelineStatistics(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineStatistics;
        $phpValue = \iggyvolz\vulkan\enum\VkQueryPipelineStatisticFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setPipelineStatistics(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkQueryPipelineStatisticFlagBits::toInt(...$phpValue);
        $this->cdata->pipelineStatistics = $cValue;
    }
}
