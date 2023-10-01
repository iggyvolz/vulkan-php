<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetLayoutBinding
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
        null|int $binding = null,
        null|\iggyvolz\vulkan\enum\VkDescriptorType $descriptorType = null,
        null|int $descriptorCount = null,
        mixed $stageFlags = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pImmutableSamplers = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetLayoutBinding', false), $vulkan->ffi);
        if(!is_null($binding)) $self->setBinding($binding);
        if(!is_null($descriptorType)) $self->setDescriptorType($descriptorType);
        if(!is_null($descriptorCount)) $self->setDescriptorCount($descriptorCount);
        if(!is_null($stageFlags)) $self->setStageFlags($stageFlags);
        if(!is_null($pImmutableSamplers)) $self->setPImmutableSamplers($pImmutableSamplers);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getBinding(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->binding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBinding(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->binding = $cValue;
    }

    /**
     * VkDescriptorType/
     */
    public function getDescriptorType(): \iggyvolz\vulkan\enum\VkDescriptorType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorType;
        $phpValue = \iggyvolz\vulkan\enum\VkDescriptorType::from($cValue);
        return $phpValue;
    }

    public function setDescriptorType(\iggyvolz\vulkan\enum\VkDescriptorType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->descriptorType = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorCount = $cValue;
    }

    /**
     * void* /
     */
    public function getStageFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stageFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setStageFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->stageFlags = $cValue;
    }

    /**
     * VkSampler* /
     */
    public function getPImmutableSamplers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pImmutableSamplers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSampler', $cValue, $ffi);
        return $phpValue;
    }

    public function setPImmutableSamplers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pImmutableSamplers = $cValue;
    }
}
