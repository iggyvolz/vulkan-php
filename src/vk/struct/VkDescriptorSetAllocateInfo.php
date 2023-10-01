<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetAllocateInfo
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
        null|VkDescriptorPool $descriptorPool = null,
        null|int $descriptorSetCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSetLayouts = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetAllocateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($descriptorPool)) $self->setDescriptorPool($descriptorPool);
        if(!is_null($descriptorSetCount)) $self->setDescriptorSetCount($descriptorSetCount);
        if(!is_null($pSetLayouts)) $self->setPSetLayouts($pSetLayouts);
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
     * VkDescriptorPool/
     */
    public function getDescriptorPool(): VkDescriptorPool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorPool;
        $phpValue = new \iggyvolz\vulkan\struct\VkDescriptorPool($cValue, $ffi);
        return $phpValue;
    }

    public function setDescriptorPool(VkDescriptorPool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->descriptorPool = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorSetCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorSetCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorSetCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorSetCount = $cValue;
    }

    /**
     * VkDescriptorSetLayout* /
     */
    public function getPSetLayouts(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSetLayouts;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorSetLayout', $cValue, $ffi);
        return $phpValue;
    }

    public function setPSetLayouts(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSetLayouts = $cValue;
    }
}
