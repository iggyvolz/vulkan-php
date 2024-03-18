<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDescriptorIndexingFeatures implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderInputAttachmentArrayDynamicIndexing" => $this->getShaderInputAttachmentArrayDynamicIndexing(),
          "shaderUniformTexelBufferArrayDynamicIndexing" => $this->getShaderUniformTexelBufferArrayDynamicIndexing(),
          "shaderStorageTexelBufferArrayDynamicIndexing" => $this->getShaderStorageTexelBufferArrayDynamicIndexing(),
          "shaderUniformBufferArrayNonUniformIndexing" => $this->getShaderUniformBufferArrayNonUniformIndexing(),
          "shaderSampledImageArrayNonUniformIndexing" => $this->getShaderSampledImageArrayNonUniformIndexing(),
          "shaderStorageBufferArrayNonUniformIndexing" => $this->getShaderStorageBufferArrayNonUniformIndexing(),
          "shaderStorageImageArrayNonUniformIndexing" => $this->getShaderStorageImageArrayNonUniformIndexing(),
          "shaderInputAttachmentArrayNonUniformIndexing" => $this->getShaderInputAttachmentArrayNonUniformIndexing(),
          "shaderUniformTexelBufferArrayNonUniformIndexing" => $this->getShaderUniformTexelBufferArrayNonUniformIndexing(),
          "shaderStorageTexelBufferArrayNonUniformIndexing" => $this->getShaderStorageTexelBufferArrayNonUniformIndexing(),
          "descriptorBindingUniformBufferUpdateAfterBind" => $this->getDescriptorBindingUniformBufferUpdateAfterBind(),
          "descriptorBindingSampledImageUpdateAfterBind" => $this->getDescriptorBindingSampledImageUpdateAfterBind(),
          "descriptorBindingStorageImageUpdateAfterBind" => $this->getDescriptorBindingStorageImageUpdateAfterBind(),
          "descriptorBindingStorageBufferUpdateAfterBind" => $this->getDescriptorBindingStorageBufferUpdateAfterBind(),
          "descriptorBindingUniformTexelBufferUpdateAfterBind" => $this->getDescriptorBindingUniformTexelBufferUpdateAfterBind(),
          "descriptorBindingStorageTexelBufferUpdateAfterBind" => $this->getDescriptorBindingStorageTexelBufferUpdateAfterBind(),
          "descriptorBindingUpdateUnusedWhilePending" => $this->getDescriptorBindingUpdateUnusedWhilePending(),
          "descriptorBindingPartiallyBound" => $this->getDescriptorBindingPartiallyBound(),
          "descriptorBindingVariableDescriptorCount" => $this->getDescriptorBindingVariableDescriptorCount(),
          "runtimeDescriptorArray" => $this->getRuntimeDescriptorArray(),
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
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDescriptorIndexingFeatures', false));
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
    public function getShaderInputAttachmentArrayDynamicIndexing(): bool
    {
        $cValue = $this->cdata->shaderInputAttachmentArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInputAttachmentArrayDynamicIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInputAttachmentArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformTexelBufferArrayDynamicIndexing(): bool
    {
        $cValue = $this->cdata->shaderUniformTexelBufferArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformTexelBufferArrayDynamicIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformTexelBufferArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageTexelBufferArrayDynamicIndexing(): bool
    {
        $cValue = $this->cdata->shaderStorageTexelBufferArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageTexelBufferArrayDynamicIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageTexelBufferArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformBufferArrayNonUniformIndexing(): bool
    {
        $cValue = $this->cdata->shaderUniformBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSampledImageArrayNonUniformIndexing(): bool
    {
        $cValue = $this->cdata->shaderSampledImageArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSampledImageArrayNonUniformIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSampledImageArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageBufferArrayNonUniformIndexing(): bool
    {
        $cValue = $this->cdata->shaderStorageBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageArrayNonUniformIndexing(): bool
    {
        $cValue = $this->cdata->shaderStorageImageArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageArrayNonUniformIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInputAttachmentArrayNonUniformIndexing(): bool
    {
        $cValue = $this->cdata->shaderInputAttachmentArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInputAttachmentArrayNonUniformIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInputAttachmentArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformTexelBufferArrayNonUniformIndexing(): bool
    {
        $cValue = $this->cdata->shaderUniformTexelBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformTexelBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformTexelBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageTexelBufferArrayNonUniformIndexing(): bool
    {
        $cValue = $this->cdata->shaderStorageTexelBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageTexelBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageTexelBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUniformBufferUpdateAfterBind(): bool
    {
        $cValue = $this->cdata->descriptorBindingUniformBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUniformBufferUpdateAfterBind(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUniformBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingSampledImageUpdateAfterBind(): bool
    {
        $cValue = $this->cdata->descriptorBindingSampledImageUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingSampledImageUpdateAfterBind(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingSampledImageUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageImageUpdateAfterBind(): bool
    {
        $cValue = $this->cdata->descriptorBindingStorageImageUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageImageUpdateAfterBind(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageImageUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageBufferUpdateAfterBind(): bool
    {
        $cValue = $this->cdata->descriptorBindingStorageBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageBufferUpdateAfterBind(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUniformTexelBufferUpdateAfterBind(): bool
    {
        $cValue = $this->cdata->descriptorBindingUniformTexelBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUniformTexelBufferUpdateAfterBind(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUniformTexelBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageTexelBufferUpdateAfterBind(): bool
    {
        $cValue = $this->cdata->descriptorBindingStorageTexelBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageTexelBufferUpdateAfterBind(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageTexelBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUpdateUnusedWhilePending(): bool
    {
        $cValue = $this->cdata->descriptorBindingUpdateUnusedWhilePending;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUpdateUnusedWhilePending(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUpdateUnusedWhilePending = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingPartiallyBound(): bool
    {
        $cValue = $this->cdata->descriptorBindingPartiallyBound;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingPartiallyBound(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingPartiallyBound = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingVariableDescriptorCount(): bool
    {
        $cValue = $this->cdata->descriptorBindingVariableDescriptorCount;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingVariableDescriptorCount(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingVariableDescriptorCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRuntimeDescriptorArray(): bool
    {
        $cValue = $this->cdata->runtimeDescriptorArray;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRuntimeDescriptorArray(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->runtimeDescriptorArray = $cValue;
    }
}
