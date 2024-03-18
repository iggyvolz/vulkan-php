<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCommandBufferInheritanceInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "renderPass" => $this->getRenderPass(),
          "subpass" => $this->getSubpass(),
          "framebuffer" => $this->getFramebuffer(),
          "occlusionQueryEnable" => $this->getOcclusionQueryEnable(),
          "queryFlags" => $this->getQueryFlags(),
          "pipelineStatistics" => $this->getPipelineStatistics(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkRenderPass $renderPass = null,
        null|int $subpass = null,
        null|VkFramebuffer $framebuffer = null,
        null|bool $occlusionQueryEnable = null,
        null|array $queryFlags = null,
        null|array $pipelineStatistics = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCommandBufferInheritanceInfo', false));
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
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkRenderPass/
     */
    public function getRenderPass(): VkRenderPass
    {
        $cValue = $this->cdata->renderPass;
        $phpValue = new \iggyvolz\vulkan\struct\VkRenderPass($cValue, $ffi);
        return $phpValue;
    }

    public function setRenderPass(VkRenderPass $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->renderPass = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubpass(): int
    {
        $cValue = $this->cdata->subpass;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubpass(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->subpass = $cValue;
    }

    /**
     * VkFramebuffer/
     */
    public function getFramebuffer(): VkFramebuffer
    {
        $cValue = $this->cdata->framebuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkFramebuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setFramebuffer(VkFramebuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->framebuffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getOcclusionQueryEnable(): bool
    {
        $cValue = $this->cdata->occlusionQueryEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setOcclusionQueryEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->occlusionQueryEnable = $cValue;
    }

    /**
     * VkQueryControlFlags/
     */
    public function getQueryFlags(): array
    {
        $cValue = $this->cdata->queryFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setQueryFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::toInt(...$phpValue);
        $this->cdata->queryFlags = $cValue;
    }

    /**
     * VkQueryPipelineStatisticFlags/
     */
    public function getPipelineStatistics(): array
    {
        $cValue = $this->cdata->pipelineStatistics;
        $phpValue = \iggyvolz\vulkan\enum\VkQueryPipelineStatisticFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setPipelineStatistics(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkQueryPipelineStatisticFlagBits::toInt(...$phpValue);
        $this->cdata->pipelineStatistics = $cValue;
    }
}
