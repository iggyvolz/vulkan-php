<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGraphicsShaderGroupCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stageCount" => $this->getStageCount(),
          "pStages" => $this->getPStages(),
          "pVertexInputState" => $this->getPVertexInputState(),
          "pTessellationState" => $this->getPTessellationState(),
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
        null|int $stageCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pStages = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pVertexInputState = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pTessellationState = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkGraphicsShaderGroupCreateInfoNV', false));
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
    public function getPStages(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pStages;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineShaderStageCreateInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPStages(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStages = $cValue;
    }

    /**
     * VkPipelineVertexInputStateCreateInfo* /
     */
    public function getPVertexInputState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pVertexInputState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineVertexInputStateCreateInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPVertexInputState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pVertexInputState = $cValue;
    }

    /**
     * VkPipelineTessellationStateCreateInfo* /
     */
    public function getPTessellationState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pTessellationState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineTessellationStateCreateInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPTessellationState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pTessellationState = $cValue;
    }
}
