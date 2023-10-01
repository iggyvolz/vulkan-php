<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGraphicsPipelineCreateInfo
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
        null|int $stageCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pStages = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pVertexInputState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pInputAssemblyState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pTessellationState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pViewportState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pRasterizationState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pMultisampleState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDepthStencilState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pColorBlendState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDynamicState = null,
        null|VkPipelineLayout $layout = null,
        null|VkRenderPass $renderPass = null,
        null|int $subpass = null,
        null|VkPipeline $basePipelineHandle = null,
        null|int $basePipelineIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkGraphicsPipelineCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($stageCount)) $self->setStageCount($stageCount);
        if(!is_null($pStages)) $self->setPStages($pStages);
        if(!is_null($pVertexInputState)) $self->setPVertexInputState($pVertexInputState);
        if(!is_null($pInputAssemblyState)) $self->setPInputAssemblyState($pInputAssemblyState);
        if(!is_null($pTessellationState)) $self->setPTessellationState($pTessellationState);
        if(!is_null($pViewportState)) $self->setPViewportState($pViewportState);
        if(!is_null($pRasterizationState)) $self->setPRasterizationState($pRasterizationState);
        if(!is_null($pMultisampleState)) $self->setPMultisampleState($pMultisampleState);
        if(!is_null($pDepthStencilState)) $self->setPDepthStencilState($pDepthStencilState);
        if(!is_null($pColorBlendState)) $self->setPColorBlendState($pColorBlendState);
        if(!is_null($pDynamicState)) $self->setPDynamicState($pDynamicState);
        if(!is_null($layout)) $self->setLayout($layout);
        if(!is_null($renderPass)) $self->setRenderPass($renderPass);
        if(!is_null($subpass)) $self->setSubpass($subpass);
        if(!is_null($basePipelineHandle)) $self->setBasePipelineHandle($basePipelineHandle);
        if(!is_null($basePipelineIndex)) $self->setBasePipelineIndex($basePipelineIndex);
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
     * uint32_t/
     */
    public function getStageCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStageCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stageCount = $cValue;
    }

    /**
     * VkPipelineShaderStageCreateInfo* /
     */
    public function getPStages(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStages;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineShaderStageCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPStages(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pStages = $cValue;
    }

    /**
     * VkPipelineVertexInputStateCreateInfo* /
     */
    public function getPVertexInputState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pVertexInputState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineVertexInputStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPVertexInputState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pVertexInputState = $cValue;
    }

    /**
     * VkPipelineInputAssemblyStateCreateInfo* /
     */
    public function getPInputAssemblyState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pInputAssemblyState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineInputAssemblyStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPInputAssemblyState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pInputAssemblyState = $cValue;
    }

    /**
     * VkPipelineTessellationStateCreateInfo* /
     */
    public function getPTessellationState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pTessellationState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineTessellationStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPTessellationState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pTessellationState = $cValue;
    }

    /**
     * VkPipelineViewportStateCreateInfo* /
     */
    public function getPViewportState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pViewportState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineViewportStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPViewportState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pViewportState = $cValue;
    }

    /**
     * VkPipelineRasterizationStateCreateInfo* /
     */
    public function getPRasterizationState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pRasterizationState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineRasterizationStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPRasterizationState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pRasterizationState = $cValue;
    }

    /**
     * VkPipelineMultisampleStateCreateInfo* /
     */
    public function getPMultisampleState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pMultisampleState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineMultisampleStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPMultisampleState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pMultisampleState = $cValue;
    }

    /**
     * VkPipelineDepthStencilStateCreateInfo* /
     */
    public function getPDepthStencilState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pDepthStencilState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineDepthStencilStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPDepthStencilState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDepthStencilState = $cValue;
    }

    /**
     * VkPipelineColorBlendStateCreateInfo* /
     */
    public function getPColorBlendState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pColorBlendState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineColorBlendStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPColorBlendState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pColorBlendState = $cValue;
    }

    /**
     * VkPipelineDynamicStateCreateInfo* /
     */
    public function getPDynamicState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pDynamicState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineDynamicStateCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPDynamicState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDynamicState = $cValue;
    }

    /**
     * VkPipelineLayout/
     */
    public function getLayout(): VkPipelineLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layout;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setLayout(VkPipelineLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->layout = $cValue;
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
     * VkPipeline/
     */
    public function getBasePipelineHandle(): VkPipeline
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->basePipelineHandle;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipeline($cValue, $ffi);
        return $phpValue;
    }

    public function setBasePipelineHandle(VkPipeline $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->basePipelineHandle = $cValue;
    }

    /**
     * int32_t/
     */
    public function getBasePipelineIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->basePipelineIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBasePipelineIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->basePipelineIndex = $cValue;
    }
}
