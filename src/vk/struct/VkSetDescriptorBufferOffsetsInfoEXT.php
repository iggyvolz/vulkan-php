<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSetDescriptorBufferOffsetsInfoEXT implements \JsonSerializable
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
          "setCount" => $this->getSetCount(),
          "pBufferIndices" => $this->getPBufferIndices(),
          "pOffsets" => $this->getPOffsets(),
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
        null|int $setCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pBufferIndices = null,
        null|\iggyvolz\vulkan\util\Pointer $pOffsets = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSetDescriptorBufferOffsetsInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stageFlags)) $self->setStageFlags($stageFlags);
        if(!is_null($layout)) $self->setLayout($layout);
        if(!is_null($firstSet)) $self->setFirstSet($firstSet);
        if(!is_null($setCount)) $self->setSetCount($setCount);
        if(!is_null($pBufferIndices)) $self->setPBufferIndices($pBufferIndices);
        if(!is_null($pOffsets)) $self->setPOffsets($pOffsets);
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
    public function getSetCount(): int
    {
        $cValue = $this->cdata->setCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSetCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->setCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPBufferIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pBufferIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPBufferIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pBufferIndices = $cValue;
    }

    /**
     * void* /
     */
    public function getPOffsets(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pOffsets;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPOffsets(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pOffsets = $cValue;
    }
}
