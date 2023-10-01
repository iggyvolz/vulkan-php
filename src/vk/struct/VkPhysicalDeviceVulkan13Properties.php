<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkan13Properties
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
        null|int $minSubgroupSize = null,
        null|int $maxSubgroupSize = null,
        null|int $maxComputeWorkgroupSubgroups = null,
        mixed $requiredSubgroupSizeStages = null,
        null|int $maxInlineUniformBlockSize = null,
        null|int $maxPerStageDescriptorInlineUniformBlocks = null,
        null|int $maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks = null,
        null|int $maxDescriptorSetInlineUniformBlocks = null,
        null|int $maxDescriptorSetUpdateAfterBindInlineUniformBlocks = null,
        null|int $maxInlineUniformTotalSize = null,
        null|bool $integerDotProduct8BitUnsignedAccelerated = null,
        null|bool $integerDotProduct8BitSignedAccelerated = null,
        null|bool $integerDotProduct8BitMixedSignednessAccelerated = null,
        null|bool $integerDotProduct4x8BitPackedUnsignedAccelerated = null,
        null|bool $integerDotProduct4x8BitPackedSignedAccelerated = null,
        null|bool $integerDotProduct4x8BitPackedMixedSignednessAccelerated = null,
        null|bool $integerDotProduct16BitUnsignedAccelerated = null,
        null|bool $integerDotProduct16BitSignedAccelerated = null,
        null|bool $integerDotProduct16BitMixedSignednessAccelerated = null,
        null|bool $integerDotProduct32BitUnsignedAccelerated = null,
        null|bool $integerDotProduct32BitSignedAccelerated = null,
        null|bool $integerDotProduct32BitMixedSignednessAccelerated = null,
        null|bool $integerDotProduct64BitUnsignedAccelerated = null,
        null|bool $integerDotProduct64BitSignedAccelerated = null,
        null|bool $integerDotProduct64BitMixedSignednessAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating8BitUnsignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating8BitSignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating16BitUnsignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating16BitSignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating32BitUnsignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating32BitSignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating64BitUnsignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating64BitSignedAccelerated = null,
        null|bool $integerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated = null,
        null|int $storageTexelBufferOffsetAlignmentBytes = null,
        null|bool $storageTexelBufferOffsetSingleTexelAlignment = null,
        null|int $uniformTexelBufferOffsetAlignmentBytes = null,
        null|bool $uniformTexelBufferOffsetSingleTexelAlignment = null,
        null|int $maxBufferSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkan13Properties', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($minSubgroupSize)) $self->setMinSubgroupSize($minSubgroupSize);
        if(!is_null($maxSubgroupSize)) $self->setMaxSubgroupSize($maxSubgroupSize);
        if(!is_null($maxComputeWorkgroupSubgroups)) $self->setMaxComputeWorkgroupSubgroups($maxComputeWorkgroupSubgroups);
        if(!is_null($requiredSubgroupSizeStages)) $self->setRequiredSubgroupSizeStages($requiredSubgroupSizeStages);
        if(!is_null($maxInlineUniformBlockSize)) $self->setMaxInlineUniformBlockSize($maxInlineUniformBlockSize);
        if(!is_null($maxPerStageDescriptorInlineUniformBlocks)) $self->setMaxPerStageDescriptorInlineUniformBlocks($maxPerStageDescriptorInlineUniformBlocks);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks)) $self->setMaxPerStageDescriptorUpdateAfterBindInlineUniformBlocks($maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks);
        if(!is_null($maxDescriptorSetInlineUniformBlocks)) $self->setMaxDescriptorSetInlineUniformBlocks($maxDescriptorSetInlineUniformBlocks);
        if(!is_null($maxDescriptorSetUpdateAfterBindInlineUniformBlocks)) $self->setMaxDescriptorSetUpdateAfterBindInlineUniformBlocks($maxDescriptorSetUpdateAfterBindInlineUniformBlocks);
        if(!is_null($maxInlineUniformTotalSize)) $self->setMaxInlineUniformTotalSize($maxInlineUniformTotalSize);
        if(!is_null($integerDotProduct8BitUnsignedAccelerated)) $self->setIntegerDotProduct8BitUnsignedAccelerated($integerDotProduct8BitUnsignedAccelerated);
        if(!is_null($integerDotProduct8BitSignedAccelerated)) $self->setIntegerDotProduct8BitSignedAccelerated($integerDotProduct8BitSignedAccelerated);
        if(!is_null($integerDotProduct8BitMixedSignednessAccelerated)) $self->setIntegerDotProduct8BitMixedSignednessAccelerated($integerDotProduct8BitMixedSignednessAccelerated);
        if(!is_null($integerDotProduct4x8BitPackedUnsignedAccelerated)) $self->setIntegerDotProduct4x8BitPackedUnsignedAccelerated($integerDotProduct4x8BitPackedUnsignedAccelerated);
        if(!is_null($integerDotProduct4x8BitPackedSignedAccelerated)) $self->setIntegerDotProduct4x8BitPackedSignedAccelerated($integerDotProduct4x8BitPackedSignedAccelerated);
        if(!is_null($integerDotProduct4x8BitPackedMixedSignednessAccelerated)) $self->setIntegerDotProduct4x8BitPackedMixedSignednessAccelerated($integerDotProduct4x8BitPackedMixedSignednessAccelerated);
        if(!is_null($integerDotProduct16BitUnsignedAccelerated)) $self->setIntegerDotProduct16BitUnsignedAccelerated($integerDotProduct16BitUnsignedAccelerated);
        if(!is_null($integerDotProduct16BitSignedAccelerated)) $self->setIntegerDotProduct16BitSignedAccelerated($integerDotProduct16BitSignedAccelerated);
        if(!is_null($integerDotProduct16BitMixedSignednessAccelerated)) $self->setIntegerDotProduct16BitMixedSignednessAccelerated($integerDotProduct16BitMixedSignednessAccelerated);
        if(!is_null($integerDotProduct32BitUnsignedAccelerated)) $self->setIntegerDotProduct32BitUnsignedAccelerated($integerDotProduct32BitUnsignedAccelerated);
        if(!is_null($integerDotProduct32BitSignedAccelerated)) $self->setIntegerDotProduct32BitSignedAccelerated($integerDotProduct32BitSignedAccelerated);
        if(!is_null($integerDotProduct32BitMixedSignednessAccelerated)) $self->setIntegerDotProduct32BitMixedSignednessAccelerated($integerDotProduct32BitMixedSignednessAccelerated);
        if(!is_null($integerDotProduct64BitUnsignedAccelerated)) $self->setIntegerDotProduct64BitUnsignedAccelerated($integerDotProduct64BitUnsignedAccelerated);
        if(!is_null($integerDotProduct64BitSignedAccelerated)) $self->setIntegerDotProduct64BitSignedAccelerated($integerDotProduct64BitSignedAccelerated);
        if(!is_null($integerDotProduct64BitMixedSignednessAccelerated)) $self->setIntegerDotProduct64BitMixedSignednessAccelerated($integerDotProduct64BitMixedSignednessAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating8BitUnsignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating8BitUnsignedAccelerated($integerDotProductAccumulatingSaturating8BitUnsignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating8BitSignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating8BitSignedAccelerated($integerDotProductAccumulatingSaturating8BitSignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated)) $self->setIntegerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated($integerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated($integerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated($integerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated)) $self->setIntegerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated($integerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating16BitUnsignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating16BitUnsignedAccelerated($integerDotProductAccumulatingSaturating16BitUnsignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating16BitSignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating16BitSignedAccelerated($integerDotProductAccumulatingSaturating16BitSignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated)) $self->setIntegerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated($integerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating32BitUnsignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating32BitUnsignedAccelerated($integerDotProductAccumulatingSaturating32BitUnsignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating32BitSignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating32BitSignedAccelerated($integerDotProductAccumulatingSaturating32BitSignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated)) $self->setIntegerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated($integerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating64BitUnsignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating64BitUnsignedAccelerated($integerDotProductAccumulatingSaturating64BitUnsignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating64BitSignedAccelerated)) $self->setIntegerDotProductAccumulatingSaturating64BitSignedAccelerated($integerDotProductAccumulatingSaturating64BitSignedAccelerated);
        if(!is_null($integerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated)) $self->setIntegerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated($integerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated);
        if(!is_null($storageTexelBufferOffsetAlignmentBytes)) $self->setStorageTexelBufferOffsetAlignmentBytes($storageTexelBufferOffsetAlignmentBytes);
        if(!is_null($storageTexelBufferOffsetSingleTexelAlignment)) $self->setStorageTexelBufferOffsetSingleTexelAlignment($storageTexelBufferOffsetSingleTexelAlignment);
        if(!is_null($uniformTexelBufferOffsetAlignmentBytes)) $self->setUniformTexelBufferOffsetAlignmentBytes($uniformTexelBufferOffsetAlignmentBytes);
        if(!is_null($uniformTexelBufferOffsetSingleTexelAlignment)) $self->setUniformTexelBufferOffsetSingleTexelAlignment($uniformTexelBufferOffsetSingleTexelAlignment);
        if(!is_null($maxBufferSize)) $self->setMaxBufferSize($maxBufferSize);
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
    public function getMinSubgroupSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minSubgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinSubgroupSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minSubgroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSubgroupSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxSubgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSubgroupSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSubgroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxComputeWorkgroupSubgroups(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxComputeWorkgroupSubgroups;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxComputeWorkgroupSubgroups(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxComputeWorkgroupSubgroups = $cValue;
    }

    /**
     * void* /
     */
    public function getRequiredSubgroupSizeStages(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->requiredSubgroupSizeStages;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setRequiredSubgroupSizeStages(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->requiredSubgroupSizeStages = $cValue;
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

    /**
     * uint32_t/
     */
    public function getMaxInlineUniformTotalSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxInlineUniformTotalSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxInlineUniformTotalSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxInlineUniformTotalSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct8BitUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct8BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct8BitUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct8BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct8BitSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct8BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct8BitSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct8BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct8BitMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct8BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct8BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct8BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct4x8BitPackedUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct4x8BitPackedUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct4x8BitPackedUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct4x8BitPackedUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct4x8BitPackedSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct4x8BitPackedSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct4x8BitPackedSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct4x8BitPackedSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct4x8BitPackedMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct4x8BitPackedMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct4x8BitPackedMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct4x8BitPackedMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct16BitUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct16BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct16BitUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct16BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct16BitSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct16BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct16BitSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct16BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct16BitMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct16BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct16BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct16BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct32BitUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct32BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct32BitUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct32BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct32BitSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct32BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct32BitSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct32BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct32BitMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct32BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct32BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct32BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct64BitUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct64BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct64BitUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct64BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct64BitSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct64BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct64BitSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct64BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct64BitMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProduct64BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct64BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct64BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating8BitUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating8BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating8BitUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating8BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating8BitSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating8BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating8BitSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating8BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated(
        bool $phpValue,
    ): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating16BitUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating16BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating16BitUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating16BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating16BitSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating16BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating16BitSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating16BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating32BitUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating32BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating32BitUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating32BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating32BitSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating32BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating32BitSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating32BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating64BitUnsignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating64BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating64BitUnsignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating64BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating64BitSignedAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating64BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating64BitSignedAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating64BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getStorageTexelBufferOffsetAlignmentBytes(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storageTexelBufferOffsetAlignmentBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStorageTexelBufferOffsetAlignmentBytes(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->storageTexelBufferOffsetAlignmentBytes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStorageTexelBufferOffsetSingleTexelAlignment(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storageTexelBufferOffsetSingleTexelAlignment;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageTexelBufferOffsetSingleTexelAlignment(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageTexelBufferOffsetSingleTexelAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getUniformTexelBufferOffsetAlignmentBytes(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->uniformTexelBufferOffsetAlignmentBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUniformTexelBufferOffsetAlignmentBytes(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->uniformTexelBufferOffsetAlignmentBytes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUniformTexelBufferOffsetSingleTexelAlignment(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->uniformTexelBufferOffsetSingleTexelAlignment;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUniformTexelBufferOffsetSingleTexelAlignment(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->uniformTexelBufferOffsetSingleTexelAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxBufferSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxBufferSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxBufferSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxBufferSize = $cValue;
    }
}
