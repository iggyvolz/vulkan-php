<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGraphicsPipelineShaderGroupsCreateInfoNV
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
        null|int $groupCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pGroups = null,
        null|int $pipelineCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPipelines = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkGraphicsPipelineShaderGroupsCreateInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($groupCount)) $self->setGroupCount($groupCount);
        if(!is_null($pGroups)) $self->setPGroups($pGroups);
        if(!is_null($pipelineCount)) $self->setPipelineCount($pipelineCount);
        if(!is_null($pPipelines)) $self->setPPipelines($pPipelines);
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
     * VkGraphicsShaderGroupCreateInfoNV* /
     */
    public function getPGroups(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pGroups;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkGraphicsShaderGroupCreateInfoNV', $cValue, $ffi);
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
    public function getPipelineCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineCount = $cValue;
    }

    /**
     * VkPipeline* /
     */
    public function getPPipelines(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPipelines;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipeline', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPipelines(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPipelines = $cValue;
    }
}
