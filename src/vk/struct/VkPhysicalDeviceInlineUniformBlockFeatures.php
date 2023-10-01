<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceInlineUniformBlockFeatures
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
        null|bool $inlineUniformBlock = null,
        null|bool $descriptorBindingInlineUniformBlockUpdateAfterBind = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceInlineUniformBlockFeatures', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($inlineUniformBlock)) $self->setInlineUniformBlock($inlineUniformBlock);
        if(!is_null($descriptorBindingInlineUniformBlockUpdateAfterBind)) $self->setDescriptorBindingInlineUniformBlockUpdateAfterBind($descriptorBindingInlineUniformBlockUpdateAfterBind);
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
    public function getInlineUniformBlock(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->inlineUniformBlock;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setInlineUniformBlock(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->inlineUniformBlock = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingInlineUniformBlockUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingInlineUniformBlockUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingInlineUniformBlockUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingInlineUniformBlockUpdateAfterBind = $cValue;
    }
}
