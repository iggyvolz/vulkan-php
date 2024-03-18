<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindDescriptorSetsInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stageFlags" => $this->getStageFlags(),
          "layout" => $this->getLayout(),
          "firstSet" => $this->getFirstSet(),
          "descriptorSetCount" => $this->getDescriptorSetCount(),
          "pDescriptorSets" => $this->getPDescriptorSets(),
          "dynamicOffsetCount" => $this->getDynamicOffsetCount(),
          "pDynamicOffsets" => $this->getPDynamicOffsets(),
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
        null|array $stageFlags = null,
        null|VkPipelineLayout $layout = null,
        null|int $firstSet = null,
        null|int $descriptorSetCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDescriptorSets = null,
        null|int $dynamicOffsetCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pDynamicOffsets = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBindDescriptorSetsInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stageFlags)) $self->setStageFlags($stageFlags);
        if(!is_null($layout)) $self->setLayout($layout);
        if(!is_null($firstSet)) $self->setFirstSet($firstSet);
        if(!is_null($descriptorSetCount)) $self->setDescriptorSetCount($descriptorSetCount);
        if(!is_null($pDescriptorSets)) $self->setPDescriptorSets($pDescriptorSets);
        if(!is_null($dynamicOffsetCount)) $self->setDynamicOffsetCount($dynamicOffsetCount);
        if(!is_null($pDynamicOffsets)) $self->setPDynamicOffsets($pDynamicOffsets);
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
     * VkShaderStageFlags/
     */
    public function getStageFlags(): array
    {
        $cValue = $this->cdata->stageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setStageFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->stageFlags = $cValue;
    }

    /**
     * VkPipelineLayout/
     */
    public function getLayout(): VkPipelineLayout
    {
        $cValue = $this->cdata->layout;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setLayout(VkPipelineLayout $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->layout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFirstSet(): int
    {
        $cValue = $this->cdata->firstSet;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstSet(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->firstSet = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorSetCount(): int
    {
        $cValue = $this->cdata->descriptorSetCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorSetCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->descriptorSetCount = $cValue;
    }

    /**
     * VkDescriptorSet* /
     */
    public function getPDescriptorSets(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pDescriptorSets;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorSet', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPDescriptorSets(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDescriptorSets = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDynamicOffsetCount(): int
    {
        $cValue = $this->cdata->dynamicOffsetCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDynamicOffsetCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dynamicOffsetCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPDynamicOffsets(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pDynamicOffsets;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPDynamicOffsets(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDynamicOffsets = $cValue;
    }
}
