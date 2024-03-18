<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkan13Properties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "minSubgroupSize" => $this->getMinSubgroupSize(),
          "maxSubgroupSize" => $this->getMaxSubgroupSize(),
          "maxComputeWorkgroupSubgroups" => $this->getMaxComputeWorkgroupSubgroups(),
          "requiredSubgroupSizeStages" => $this->getRequiredSubgroupSizeStages(),
          "maxInlineUniformBlockSize" => $this->getMaxInlineUniformBlockSize(),
          "maxPerStageDescriptorInlineUniformBlocks" => $this->getMaxPerStageDescriptorInlineUniformBlocks(),
          "maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks" => $this->getMaxPerStageDescriptorUpdateAfterBindInlineUniformBlocks(),
          "maxDescriptorSetInlineUniformBlocks" => $this->getMaxDescriptorSetInlineUniformBlocks(),
          "maxDescriptorSetUpdateAfterBindInlineUniformBlocks" => $this->getMaxDescriptorSetUpdateAfterBindInlineUniformBlocks(),
          "maxInlineUniformTotalSize" => $this->getMaxInlineUniformTotalSize(),
          "integerDotProduct8BitUnsignedAccelerated" => $this->getIntegerDotProduct8BitUnsignedAccelerated(),
          "integerDotProduct8BitSignedAccelerated" => $this->getIntegerDotProduct8BitSignedAccelerated(),
          "integerDotProduct8BitMixedSignednessAccelerated" => $this->getIntegerDotProduct8BitMixedSignednessAccelerated(),
          "integerDotProduct4x8BitPackedUnsignedAccelerated" => $this->getIntegerDotProduct4x8BitPackedUnsignedAccelerated(),
          "integerDotProduct4x8BitPackedSignedAccelerated" => $this->getIntegerDotProduct4x8BitPackedSignedAccelerated(),
          "integerDotProduct4x8BitPackedMixedSignednessAccelerated" => $this->getIntegerDotProduct4x8BitPackedMixedSignednessAccelerated(),
          "integerDotProduct16BitUnsignedAccelerated" => $this->getIntegerDotProduct16BitUnsignedAccelerated(),
          "integerDotProduct16BitSignedAccelerated" => $this->getIntegerDotProduct16BitSignedAccelerated(),
          "integerDotProduct16BitMixedSignednessAccelerated" => $this->getIntegerDotProduct16BitMixedSignednessAccelerated(),
          "integerDotProduct32BitUnsignedAccelerated" => $this->getIntegerDotProduct32BitUnsignedAccelerated(),
          "integerDotProduct32BitSignedAccelerated" => $this->getIntegerDotProduct32BitSignedAccelerated(),
          "integerDotProduct32BitMixedSignednessAccelerated" => $this->getIntegerDotProduct32BitMixedSignednessAccelerated(),
          "integerDotProduct64BitUnsignedAccelerated" => $this->getIntegerDotProduct64BitUnsignedAccelerated(),
          "integerDotProduct64BitSignedAccelerated" => $this->getIntegerDotProduct64BitSignedAccelerated(),
          "integerDotProduct64BitMixedSignednessAccelerated" => $this->getIntegerDotProduct64BitMixedSignednessAccelerated(),
          "integerDotProductAccumulatingSaturating8BitUnsignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating8BitUnsignedAccelerated(),
          "integerDotProductAccumulatingSaturating8BitSignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating8BitSignedAccelerated(),
          "integerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated" => $this->getIntegerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated(),
          "integerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated(),
          "integerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated(),
          "integerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated" => $this->getIntegerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated(),
          "integerDotProductAccumulatingSaturating16BitUnsignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating16BitUnsignedAccelerated(),
          "integerDotProductAccumulatingSaturating16BitSignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating16BitSignedAccelerated(),
          "integerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated" => $this->getIntegerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated(),
          "integerDotProductAccumulatingSaturating32BitUnsignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating32BitUnsignedAccelerated(),
          "integerDotProductAccumulatingSaturating32BitSignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating32BitSignedAccelerated(),
          "integerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated" => $this->getIntegerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated(),
          "integerDotProductAccumulatingSaturating64BitUnsignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating64BitUnsignedAccelerated(),
          "integerDotProductAccumulatingSaturating64BitSignedAccelerated" => $this->getIntegerDotProductAccumulatingSaturating64BitSignedAccelerated(),
          "integerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated" => $this->getIntegerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated(),
          "storageTexelBufferOffsetAlignmentBytes" => $this->getStorageTexelBufferOffsetAlignmentBytes(),
          "storageTexelBufferOffsetSingleTexelAlignment" => $this->getStorageTexelBufferOffsetSingleTexelAlignment(),
          "uniformTexelBufferOffsetAlignmentBytes" => $this->getUniformTexelBufferOffsetAlignmentBytes(),
          "uniformTexelBufferOffsetSingleTexelAlignment" => $this->getUniformTexelBufferOffsetSingleTexelAlignment(),
          "maxBufferSize" => $this->getMaxBufferSize(),
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
        null|int $minSubgroupSize = null,
        null|int $maxSubgroupSize = null,
        null|int $maxComputeWorkgroupSubgroups = null,
        null|array $requiredSubgroupSizeStages = null,
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
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkan13Properties', false));
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
    public function getMinSubgroupSize(): int
    {
        $cValue = $this->cdata->minSubgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinSubgroupSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->minSubgroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSubgroupSize(): int
    {
        $cValue = $this->cdata->maxSubgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSubgroupSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxSubgroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxComputeWorkgroupSubgroups(): int
    {
        $cValue = $this->cdata->maxComputeWorkgroupSubgroups;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxComputeWorkgroupSubgroups(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxComputeWorkgroupSubgroups = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getRequiredSubgroupSizeStages(): array
    {
        $cValue = $this->cdata->requiredSubgroupSizeStages;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setRequiredSubgroupSizeStages(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->requiredSubgroupSizeStages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxInlineUniformBlockSize(): int
    {
        $cValue = $this->cdata->maxInlineUniformBlockSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxInlineUniformBlockSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxInlineUniformBlockSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorInlineUniformBlocks(): int
    {
        $cValue = $this->cdata->maxPerStageDescriptorInlineUniformBlocks;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorInlineUniformBlocks(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorInlineUniformBlocks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindInlineUniformBlocks(): int
    {
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindInlineUniformBlocks(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetInlineUniformBlocks(): int
    {
        $cValue = $this->cdata->maxDescriptorSetInlineUniformBlocks;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetInlineUniformBlocks(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetInlineUniformBlocks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindInlineUniformBlocks(): int
    {
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindInlineUniformBlocks;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindInlineUniformBlocks(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindInlineUniformBlocks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxInlineUniformTotalSize(): int
    {
        $cValue = $this->cdata->maxInlineUniformTotalSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxInlineUniformTotalSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxInlineUniformTotalSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct8BitUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct8BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct8BitUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct8BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct8BitSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct8BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct8BitSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct8BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct8BitMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct8BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct8BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct8BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct4x8BitPackedUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct4x8BitPackedUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct4x8BitPackedUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct4x8BitPackedUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct4x8BitPackedSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct4x8BitPackedSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct4x8BitPackedSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct4x8BitPackedSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct4x8BitPackedMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct4x8BitPackedMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct4x8BitPackedMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct4x8BitPackedMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct16BitUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct16BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct16BitUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct16BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct16BitSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct16BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct16BitSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct16BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct16BitMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct16BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct16BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct16BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct32BitUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct32BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct32BitUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct32BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct32BitSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct32BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct32BitSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct32BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct32BitMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct32BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct32BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct32BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct64BitUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct64BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct64BitUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct64BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct64BitSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct64BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct64BitSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct64BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProduct64BitMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProduct64BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProduct64BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProduct64BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating8BitUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating8BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating8BitUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating8BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating8BitSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating8BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating8BitSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating8BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating8BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated(
        bool $phpValue,
    ): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating4x8BitPackedMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating16BitUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating16BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating16BitUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating16BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating16BitSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating16BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating16BitSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating16BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating16BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating32BitUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating32BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating32BitUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating32BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating32BitSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating32BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating32BitSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating32BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating32BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating64BitUnsignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating64BitUnsignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating64BitUnsignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating64BitUnsignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating64BitSignedAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating64BitSignedAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating64BitSignedAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating64BitSignedAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntegerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated(): bool
    {
        $cValue = $this->cdata->integerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIntegerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->integerDotProductAccumulatingSaturating64BitMixedSignednessAccelerated = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getStorageTexelBufferOffsetAlignmentBytes(): int
    {
        $cValue = $this->cdata->storageTexelBufferOffsetAlignmentBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStorageTexelBufferOffsetAlignmentBytes(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->storageTexelBufferOffsetAlignmentBytes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStorageTexelBufferOffsetSingleTexelAlignment(): bool
    {
        $cValue = $this->cdata->storageTexelBufferOffsetSingleTexelAlignment;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageTexelBufferOffsetSingleTexelAlignment(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageTexelBufferOffsetSingleTexelAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getUniformTexelBufferOffsetAlignmentBytes(): int
    {
        $cValue = $this->cdata->uniformTexelBufferOffsetAlignmentBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUniformTexelBufferOffsetAlignmentBytes(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->uniformTexelBufferOffsetAlignmentBytes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUniformTexelBufferOffsetSingleTexelAlignment(): bool
    {
        $cValue = $this->cdata->uniformTexelBufferOffsetSingleTexelAlignment;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUniformTexelBufferOffsetSingleTexelAlignment(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->uniformTexelBufferOffsetSingleTexelAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxBufferSize(): int
    {
        $cValue = $this->cdata->maxBufferSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxBufferSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxBufferSize = $cValue;
    }
}
