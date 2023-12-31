<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceInlineUniformBlockProperties
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
        null|int $maxInlineUniformBlockSize = null,
        null|int $maxPerStageDescriptorInlineUniformBlocks = null,
        null|int $maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks = null,
        null|int $maxDescriptorSetInlineUniformBlocks = null,
        null|int $maxDescriptorSetUpdateAfterBindInlineUniformBlocks = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceInlineUniformBlockProperties', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxInlineUniformBlockSize)) $self->setMaxInlineUniformBlockSize($maxInlineUniformBlockSize);
        if(!is_null($maxPerStageDescriptorInlineUniformBlocks)) $self->setMaxPerStageDescriptorInlineUniformBlocks($maxPerStageDescriptorInlineUniformBlocks);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks)) $self->setMaxPerStageDescriptorUpdateAfterBindInlineUniformBlocks($maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks);
        if(!is_null($maxDescriptorSetInlineUniformBlocks)) $self->setMaxDescriptorSetInlineUniformBlocks($maxDescriptorSetInlineUniformBlocks);
        if(!is_null($maxDescriptorSetUpdateAfterBindInlineUniformBlocks)) $self->setMaxDescriptorSetUpdateAfterBindInlineUniformBlocks($maxDescriptorSetUpdateAfterBindInlineUniformBlocks);
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
    public function getMaxInlineUniformBlockSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxInlineUniformBlockSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxInlineUniformBlockSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxInlineUniformBlockSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorInlineUniformBlocks(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorInlineUniformBlocks;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorInlineUniformBlocks(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorInlineUniformBlocks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindInlineUniformBlocks(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindInlineUniformBlocks(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetInlineUniformBlocks(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetInlineUniformBlocks;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetInlineUniformBlocks(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetInlineUniformBlocks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindInlineUniformBlocks(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindInlineUniformBlocks;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindInlineUniformBlocks(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindInlineUniformBlocks = $cValue;
    }
}
