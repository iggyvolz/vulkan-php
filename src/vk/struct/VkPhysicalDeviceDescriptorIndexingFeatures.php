<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDescriptorIndexingFeatures
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
        null|bool $shaderInputAttachmentArrayDynamicIndexing = null,
        null|bool $shaderUniformTexelBufferArrayDynamicIndexing = null,
        null|bool $shaderStorageTexelBufferArrayDynamicIndexing = null,
        null|bool $shaderUniformBufferArrayNonUniformIndexing = null,
        null|bool $shaderSampledImageArrayNonUniformIndexing = null,
        null|bool $shaderStorageBufferArrayNonUniformIndexing = null,
        null|bool $shaderStorageImageArrayNonUniformIndexing = null,
        null|bool $shaderInputAttachmentArrayNonUniformIndexing = null,
        null|bool $shaderUniformTexelBufferArrayNonUniformIndexing = null,
        null|bool $shaderStorageTexelBufferArrayNonUniformIndexing = null,
        null|bool $descriptorBindingUniformBufferUpdateAfterBind = null,
        null|bool $descriptorBindingSampledImageUpdateAfterBind = null,
        null|bool $descriptorBindingStorageImageUpdateAfterBind = null,
        null|bool $descriptorBindingStorageBufferUpdateAfterBind = null,
        null|bool $descriptorBindingUniformTexelBufferUpdateAfterBind = null,
        null|bool $descriptorBindingStorageTexelBufferUpdateAfterBind = null,
        null|bool $descriptorBindingUpdateUnusedWhilePending = null,
        null|bool $descriptorBindingPartiallyBound = null,
        null|bool $descriptorBindingVariableDescriptorCount = null,
        null|bool $runtimeDescriptorArray = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDescriptorIndexingFeatures', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderInputAttachmentArrayDynamicIndexing)) $self->setShaderInputAttachmentArrayDynamicIndexing($shaderInputAttachmentArrayDynamicIndexing);
        if(!is_null($shaderUniformTexelBufferArrayDynamicIndexing)) $self->setShaderUniformTexelBufferArrayDynamicIndexing($shaderUniformTexelBufferArrayDynamicIndexing);
        if(!is_null($shaderStorageTexelBufferArrayDynamicIndexing)) $self->setShaderStorageTexelBufferArrayDynamicIndexing($shaderStorageTexelBufferArrayDynamicIndexing);
        if(!is_null($shaderUniformBufferArrayNonUniformIndexing)) $self->setShaderUniformBufferArrayNonUniformIndexing($shaderUniformBufferArrayNonUniformIndexing);
        if(!is_null($shaderSampledImageArrayNonUniformIndexing)) $self->setShaderSampledImageArrayNonUniformIndexing($shaderSampledImageArrayNonUniformIndexing);
        if(!is_null($shaderStorageBufferArrayNonUniformIndexing)) $self->setShaderStorageBufferArrayNonUniformIndexing($shaderStorageBufferArrayNonUniformIndexing);
        if(!is_null($shaderStorageImageArrayNonUniformIndexing)) $self->setShaderStorageImageArrayNonUniformIndexing($shaderStorageImageArrayNonUniformIndexing);
        if(!is_null($shaderInputAttachmentArrayNonUniformIndexing)) $self->setShaderInputAttachmentArrayNonUniformIndexing($shaderInputAttachmentArrayNonUniformIndexing);
        if(!is_null($shaderUniformTexelBufferArrayNonUniformIndexing)) $self->setShaderUniformTexelBufferArrayNonUniformIndexing($shaderUniformTexelBufferArrayNonUniformIndexing);
        if(!is_null($shaderStorageTexelBufferArrayNonUniformIndexing)) $self->setShaderStorageTexelBufferArrayNonUniformIndexing($shaderStorageTexelBufferArrayNonUniformIndexing);
        if(!is_null($descriptorBindingUniformBufferUpdateAfterBind)) $self->setDescriptorBindingUniformBufferUpdateAfterBind($descriptorBindingUniformBufferUpdateAfterBind);
        if(!is_null($descriptorBindingSampledImageUpdateAfterBind)) $self->setDescriptorBindingSampledImageUpdateAfterBind($descriptorBindingSampledImageUpdateAfterBind);
        if(!is_null($descriptorBindingStorageImageUpdateAfterBind)) $self->setDescriptorBindingStorageImageUpdateAfterBind($descriptorBindingStorageImageUpdateAfterBind);
        if(!is_null($descriptorBindingStorageBufferUpdateAfterBind)) $self->setDescriptorBindingStorageBufferUpdateAfterBind($descriptorBindingStorageBufferUpdateAfterBind);
        if(!is_null($descriptorBindingUniformTexelBufferUpdateAfterBind)) $self->setDescriptorBindingUniformTexelBufferUpdateAfterBind($descriptorBindingUniformTexelBufferUpdateAfterBind);
        if(!is_null($descriptorBindingStorageTexelBufferUpdateAfterBind)) $self->setDescriptorBindingStorageTexelBufferUpdateAfterBind($descriptorBindingStorageTexelBufferUpdateAfterBind);
        if(!is_null($descriptorBindingUpdateUnusedWhilePending)) $self->setDescriptorBindingUpdateUnusedWhilePending($descriptorBindingUpdateUnusedWhilePending);
        if(!is_null($descriptorBindingPartiallyBound)) $self->setDescriptorBindingPartiallyBound($descriptorBindingPartiallyBound);
        if(!is_null($descriptorBindingVariableDescriptorCount)) $self->setDescriptorBindingVariableDescriptorCount($descriptorBindingVariableDescriptorCount);
        if(!is_null($runtimeDescriptorArray)) $self->setRuntimeDescriptorArray($runtimeDescriptorArray);
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
    public function getShaderInputAttachmentArrayDynamicIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderInputAttachmentArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInputAttachmentArrayDynamicIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInputAttachmentArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformTexelBufferArrayDynamicIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderUniformTexelBufferArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformTexelBufferArrayDynamicIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformTexelBufferArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageTexelBufferArrayDynamicIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderStorageTexelBufferArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageTexelBufferArrayDynamicIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageTexelBufferArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformBufferArrayNonUniformIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderUniformBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSampledImageArrayNonUniformIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSampledImageArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSampledImageArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSampledImageArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageBufferArrayNonUniformIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderStorageBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageArrayNonUniformIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderStorageImageArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInputAttachmentArrayNonUniformIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderInputAttachmentArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInputAttachmentArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInputAttachmentArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformTexelBufferArrayNonUniformIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderUniformTexelBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformTexelBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformTexelBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageTexelBufferArrayNonUniformIndexing(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderStorageTexelBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageTexelBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageTexelBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUniformBufferUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingUniformBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUniformBufferUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUniformBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingSampledImageUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingSampledImageUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingSampledImageUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingSampledImageUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageImageUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingStorageImageUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageImageUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageImageUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageBufferUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingStorageBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageBufferUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUniformTexelBufferUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingUniformTexelBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUniformTexelBufferUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUniformTexelBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageTexelBufferUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingStorageTexelBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageTexelBufferUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageTexelBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUpdateUnusedWhilePending(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingUpdateUnusedWhilePending;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUpdateUnusedWhilePending(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUpdateUnusedWhilePending = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingPartiallyBound(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingPartiallyBound;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingPartiallyBound(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingPartiallyBound = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingVariableDescriptorCount(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingVariableDescriptorCount;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingVariableDescriptorCount(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingVariableDescriptorCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRuntimeDescriptorArray(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->runtimeDescriptorArray;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRuntimeDescriptorArray(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->runtimeDescriptorArray = $cValue;
    }
}
