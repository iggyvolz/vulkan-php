<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRayTracingPipelineCreateInfoNV
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
        null|int $groupCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pGroups = null,
        null|int $maxRecursionDepth = null,
        null|VkPipelineLayout $layout = null,
        null|VkPipeline $basePipelineHandle = null,
        null|int $basePipelineIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRayTracingPipelineCreateInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($stageCount)) $self->setStageCount($stageCount);
        if(!is_null($pStages)) $self->setPStages($pStages);
        if(!is_null($groupCount)) $self->setGroupCount($groupCount);
        if(!is_null($pGroups)) $self->setPGroups($pGroups);
        if(!is_null($maxRecursionDepth)) $self->setMaxRecursionDepth($maxRecursionDepth);
        if(!is_null($layout)) $self->setLayout($layout);
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
     * uint32_t/
     */
    public function getGroupCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->groupCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->groupCount = $cValue;
    }

    /**
     * VkRayTracingShaderGroupCreateInfoNV* /
     */
    public function getPGroups(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pGroups;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRayTracingShaderGroupCreateInfoNV', $cValue, $ffi);
        return $phpValue;
    }

    public function setPGroups(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pGroups = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRecursionDepth(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxRecursionDepth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRecursionDepth(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxRecursionDepth = $cValue;
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
