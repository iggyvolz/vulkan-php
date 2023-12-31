<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetBindingReferenceVALVE
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
        null|VkDescriptorSetLayout $descriptorSetLayout = null,
        null|int $binding = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetBindingReferenceVALVE', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($descriptorSetLayout)) $self->setDescriptorSetLayout($descriptorSetLayout);
        if(!is_null($binding)) $self->setBinding($binding);
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
     * VkDescriptorSetLayout/
     */
    public function getDescriptorSetLayout(): VkDescriptorSetLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorSetLayout;
        $phpValue = new \iggyvolz\vulkan\struct\VkDescriptorSetLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setDescriptorSetLayout(VkDescriptorSetLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->descriptorSetLayout = $cValue;
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
}
