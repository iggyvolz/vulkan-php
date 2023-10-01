<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineLayoutCreateInfo
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
        null|int $setLayoutCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSetLayouts = null,
        null|int $pushConstantRangeCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPushConstantRanges = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineLayoutCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($setLayoutCount)) $self->setSetLayoutCount($setLayoutCount);
        if(!is_null($pSetLayouts)) $self->setPSetLayouts($pSetLayouts);
        if(!is_null($pushConstantRangeCount)) $self->setPushConstantRangeCount($pushConstantRangeCount);
        if(!is_null($pPushConstantRanges)) $self->setPPushConstantRanges($pPushConstantRanges);
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
    public function getSetLayoutCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->setLayoutCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSetLayoutCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->setLayoutCount = $cValue;
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

    /**
     * uint32_t/
     */
    public function getPushConstantRangeCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pushConstantRangeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPushConstantRangeCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pushConstantRangeCount = $cValue;
    }

    /**
     * VkPushConstantRange* /
     */
    public function getPPushConstantRanges(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPushConstantRanges;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPushConstantRange', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPushConstantRanges(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPushConstantRanges = $cValue;
    }
}
