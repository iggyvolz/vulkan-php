<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceInlineUniformBlockProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxInlineUniformBlockSize" => $this->getMaxInlineUniformBlockSize(),
          "maxPerStageDescriptorInlineUniformBlocks" => $this->getMaxPerStageDescriptorInlineUniformBlocks(),
          "maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks" => $this->getMaxPerStageDescriptorUpdateAfterBindInlineUniformBlocks(),
          "maxDescriptorSetInlineUniformBlocks" => $this->getMaxDescriptorSetInlineUniformBlocks(),
          "maxDescriptorSetUpdateAfterBindInlineUniformBlocks" => $this->getMaxDescriptorSetUpdateAfterBindInlineUniformBlocks(),
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
        null|int $maxInlineUniformBlockSize = null,
        null|int $maxPerStageDescriptorInlineUniformBlocks = null,
        null|int $maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks = null,
        null|int $maxDescriptorSetInlineUniformBlocks = null,
        null|int $maxDescriptorSetUpdateAfterBindInlineUniformBlocks = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceInlineUniformBlockProperties', false));
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
}
