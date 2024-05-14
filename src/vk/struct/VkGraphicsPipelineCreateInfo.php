<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGraphicsPipelineCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "stageCount" => $this->getStageCount(),
          "pStages" => $this->getPStages(),
          "pVertexInputState" => $this->getPVertexInputState(),
          "pInputAssemblyState" => $this->getPInputAssemblyState(),
          "pTessellationState" => $this->getPTessellationState(),
          "pViewportState" => $this->getPViewportState(),
          "pRasterizationState" => $this->getPRasterizationState(),
          "pMultisampleState" => $this->getPMultisampleState(),
          "pDepthStencilState" => $this->getPDepthStencilState(),
          "pColorBlendState" => $this->getPColorBlendState(),
          "pDynamicState" => $this->getPDynamicState(),
          "layout" => $this->getLayout(),
          "renderPass" => $this->getRenderPass(),
          "subpass" => $this->getSubpass(),
          "basePipelineHandle" => $this->getBasePipelineHandle(),
          "basePipelineIndex" => $this->getBasePipelineIndex(),
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
        \FFI $ffi,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|int $stageCount = null,
        null|VkPipelineShaderStageCreateInfo $pStages = null,
        null|VkPipelineVertexInputStateCreateInfo $pVertexInputState = null,
        null|VkPipelineInputAssemblyStateCreateInfo $pInputAssemblyState = null,
        null|VkPipelineTessellationStateCreateInfo $pTessellationState = null,
        null|VkPipelineViewportStateCreateInfo $pViewportState = null,
        null|VkPipelineRasterizationStateCreateInfo $pRasterizationState = null,
        null|VkPipelineMultisampleStateCreateInfo $pMultisampleState = null,
        null|VkPipelineDepthStencilStateCreateInfo $pDepthStencilState = null,
        null|VkPipelineColorBlendStateCreateInfo $pColorBlendState = null,
        null|VkPipelineDynamicStateCreateInfo $pDynamicState = null,
        null|VkPipelineLayout $layout = null,
        null|VkRenderPass $renderPass = null,
        null|int $subpass = null,
        null|VkPipeline $basePipelineHandle = null,
        null|int $basePipelineIndex = null,
    ): self {
        $self = new self( $ffi->new('VkGraphicsPipelineCreateInfo', false));
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
     * VkPipelineCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkPipelineCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStageCount(): int
    {
        $cValue = $this->cdata->stageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStageCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stageCount = $cValue;
    }

    /**
     * VkPipelineShaderStageCreateInfo* /
     */
    public function getPStages(): VkPipelineShaderStageCreateInfo
    {
        $cValue = $this->cdata->pStages;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineShaderStageCreateInfo($cValue);
        return $phpValue;
    }

    public function setPStages(VkPipelineShaderStageCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStages = $cValue;
    }

    /**
     * VkPipelineVertexInputStateCreateInfo* /
     */
    public function getPVertexInputState(): VkPipelineVertexInputStateCreateInfo
    {
        $cValue = $this->cdata->pVertexInputState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineVertexInputStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPVertexInputState(VkPipelineVertexInputStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pVertexInputState = $cValue;
    }

    /**
     * VkPipelineInputAssemblyStateCreateInfo* /
     */
    public function getPInputAssemblyState(): VkPipelineInputAssemblyStateCreateInfo
    {
        $cValue = $this->cdata->pInputAssemblyState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineInputAssemblyStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPInputAssemblyState(VkPipelineInputAssemblyStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pInputAssemblyState = $cValue;
    }

    /**
     * VkPipelineTessellationStateCreateInfo* /
     */
    public function getPTessellationState(): VkPipelineTessellationStateCreateInfo
    {
        $cValue = $this->cdata->pTessellationState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineTessellationStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPTessellationState(VkPipelineTessellationStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pTessellationState = $cValue;
    }

    /**
     * VkPipelineViewportStateCreateInfo* /
     */
    public function getPViewportState(): VkPipelineViewportStateCreateInfo
    {
        $cValue = $this->cdata->pViewportState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineViewportStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPViewportState(VkPipelineViewportStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pViewportState = $cValue;
    }

    /**
     * VkPipelineRasterizationStateCreateInfo* /
     */
    public function getPRasterizationState(): VkPipelineRasterizationStateCreateInfo
    {
        $cValue = $this->cdata->pRasterizationState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineRasterizationStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPRasterizationState(VkPipelineRasterizationStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pRasterizationState = $cValue;
    }

    /**
     * VkPipelineMultisampleStateCreateInfo* /
     */
    public function getPMultisampleState(): VkPipelineMultisampleStateCreateInfo
    {
        $cValue = $this->cdata->pMultisampleState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineMultisampleStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPMultisampleState(VkPipelineMultisampleStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pMultisampleState = $cValue;
    }

    /**
     * VkPipelineDepthStencilStateCreateInfo* /
     */
    public function getPDepthStencilState(): VkPipelineDepthStencilStateCreateInfo
    {
        $cValue = $this->cdata->pDepthStencilState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineDepthStencilStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPDepthStencilState(VkPipelineDepthStencilStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDepthStencilState = $cValue;
    }

    /**
     * VkPipelineColorBlendStateCreateInfo* /
     */
    public function getPColorBlendState(): VkPipelineColorBlendStateCreateInfo
    {
        $cValue = $this->cdata->pColorBlendState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineColorBlendStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPColorBlendState(VkPipelineColorBlendStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pColorBlendState = $cValue;
    }

    /**
     * VkPipelineDynamicStateCreateInfo* /
     */
    public function getPDynamicState(): VkPipelineDynamicStateCreateInfo
    {
        $cValue = $this->cdata->pDynamicState;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineDynamicStateCreateInfo($cValue);
        return $phpValue;
    }

    public function setPDynamicState(VkPipelineDynamicStateCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDynamicState = $cValue;
    }

    /**
     * VkPipelineLayout/
     */
    public function getLayout(): VkPipelineLayout
    {
        $cValue = $this->cdata->layout;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setLayout(VkPipelineLayout $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->layout = $cValue;
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
     * VkPipeline/
     */
    public function getBasePipelineHandle(): VkPipeline
    {
        $cValue = $this->cdata->basePipelineHandle;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipeline($cValue, $ffi);
        return $phpValue;
    }

    public function setBasePipelineHandle(VkPipeline $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->basePipelineHandle = $cValue;
    }

    /**
     * int32_t/
     */
    public function getBasePipelineIndex(): int
    {
        $cValue = $this->cdata->basePipelineIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBasePipelineIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->basePipelineIndex = $cValue;
    }
}
