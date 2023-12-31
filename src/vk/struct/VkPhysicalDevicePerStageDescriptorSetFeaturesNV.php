<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevicePerStageDescriptorSetFeaturesNV
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $perStageDescriptorSet = null,
        null|bool $dynamicPipelineLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevicePerStageDescriptorSetFeaturesNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($perStageDescriptorSet)) $self->setPerStageDescriptorSet($perStageDescriptorSet);
        if(!is_null($dynamicPipelineLayout)) $self->setDynamicPipelineLayout($dynamicPipelineLayout);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPerStageDescriptorSet(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->perStageDescriptorSet;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPerStageDescriptorSet(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->perStageDescriptorSet = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDynamicPipelineLayout(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dynamicPipelineLayout;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDynamicPipelineLayout(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->dynamicPipelineLayout = $cValue;
    }
}
