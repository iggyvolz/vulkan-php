<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRayTracingPipelineCreateInfoKHR
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
        null|array $flags = null,
        null|int $stageCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pStages = null,
        null|int $groupCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pGroups = null,
        null|int $maxPipelineRayRecursionDepth = null,
        mixed $pLibraryInfo = null,
        mixed $pLibraryInterface = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDynamicState = null,
        null|VkPipelineLayout $layout = null,
        null|VkPipeline $basePipelineHandle = null,
        null|int $basePipelineIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRayTracingPipelineCreateInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($stageCount)) $self->setStageCount($stageCount);
        if(!is_null($pStages)) $self->setPStages($pStages);
        if(!is_null($groupCount)) $self->setGroupCount($groupCount);
        if(!is_null($pGroups)) $self->setPGroups($pGroups);
        if(!is_null($maxPipelineRayRecursionDepth)) $self->setMaxPipelineRayRecursionDepth($maxPipelineRayRecursionDepth);
        if(!is_null($pLibraryInfo)) $self->setPLibraryInfo($pLibraryInfo);
        if(!is_null($pLibraryInterface)) $self->setPLibraryInterface($pLibraryInterface);
        if(!is_null($pDynamicState)) $self->setPDynamicState($pDynamicState);
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
     * VkPipelineCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineCreateFlagBits::toInt(...$phpValue);
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
     * VkRayTracingShaderGroupCreateInfoKHR* /
     */
    public function getPGroups(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pGroups;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRayTracingShaderGroupCreateInfoKHR', $cValue, $ffi);
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
    public function getMaxPipelineRayRecursionDepth(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPipelineRayRecursionDepth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPipelineRayRecursionDepth(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPipelineRayRecursionDepth = $cValue;
    }

    /**
     * void* /
     */
    public function getPLibraryInfo(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pLibraryInfo;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPLibraryInfo(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pLibraryInfo = $cValue;
    }

    /**
     * void* /
     */
    public function getPLibraryInterface(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pLibraryInterface;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPLibraryInterface(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pLibraryInterface = $cValue;
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
