<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRayTracingPipelineCreateInfoKHR implements \JsonSerializable
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
          "groupCount" => $this->getGroupCount(),
          "pGroups" => $this->getPGroups(),
          "maxPipelineRayRecursionDepth" => $this->getMaxPipelineRayRecursionDepth(),
          "pLibraryInfo" => $this->getPLibraryInfo(),
          "pLibraryInterface" => $this->getPLibraryInterface(),
          "pDynamicState" => $this->getPDynamicState(),
          "layout" => $this->getLayout(),
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
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|int $stageCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pStages = null,
        null|int $groupCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pGroups = null,
        null|int $maxPipelineRayRecursionDepth = null,
        null|\iggyvolz\vulkan\util\Pointer $pLibraryInfo = null,
        null|\iggyvolz\vulkan\util\Pointer $pLibraryInterface = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDynamicState = null,
        null|VkPipelineLayout $layout = null,
        null|VkPipeline $basePipelineHandle = null,
        null|int $basePipelineIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRayTracingPipelineCreateInfoKHR', false));
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
     * uint32_t/
     */
    public function getGroupCount(): int
    {
        $cValue = $this->cdata->groupCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->groupCount = $cValue;
    }

    /**
     * VkRayTracingShaderGroupCreateInfoKHR* /
     */
    public function getPGroups(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pGroups;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRayTracingShaderGroupCreateInfoKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPGroups(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pGroups = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPipelineRayRecursionDepth(): int
    {
        $cValue = $this->cdata->maxPipelineRayRecursionDepth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPipelineRayRecursionDepth(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxPipelineRayRecursionDepth = $cValue;
    }

    /**
     * void* /
     */
    public function getPLibraryInfo(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pLibraryInfo;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPLibraryInfo(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pLibraryInfo = $cValue;
    }

    /**
     * void* /
     */
    public function getPLibraryInterface(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pLibraryInterface;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPLibraryInterface(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pLibraryInterface = $cValue;
    }

    /**
     * VkPipelineDynamicStateCreateInfo* /
     */
    public function getPDynamicState(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pDynamicState;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineDynamicStateCreateInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPDynamicState(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
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
