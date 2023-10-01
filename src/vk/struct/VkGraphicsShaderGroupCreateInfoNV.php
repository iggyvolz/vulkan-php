<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGraphicsShaderGroupCreateInfoNV
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
        null|int $stageCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pStages = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pVertexInputState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pTessellationState = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkGraphicsShaderGroupCreateInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stageCount)) $self->setStageCount($stageCount);
        if(!is_null($pStages)) $self->setPStages($pStages);
        if(!is_null($pVertexInputState)) $self->setPVertexInputState($pVertexInputState);
        if(!is_null($pTessellationState)) $self->setPTessellationState($pTessellationState);
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
}
