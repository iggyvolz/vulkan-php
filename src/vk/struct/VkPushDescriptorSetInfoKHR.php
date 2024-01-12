<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPushDescriptorSetInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stageFlags" => $this->getStageFlags(),
          "layout" => $this->getLayout(),
          "set" => $this->getSet(),
          "descriptorWriteCount" => $this->getDescriptorWriteCount(),
          "pDescriptorWrites" => $this->getPDescriptorWrites(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $stageFlags = null,
        null|VkPipelineLayout $layout = null,
        null|int $set = null,
        null|int $descriptorWriteCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDescriptorWrites = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPushDescriptorSetInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stageFlags)) $self->setStageFlags($stageFlags);
        if(!is_null($layout)) $self->setLayout($layout);
        if(!is_null($set)) $self->setSet($set);
        if(!is_null($descriptorWriteCount)) $self->setDescriptorWriteCount($descriptorWriteCount);
        if(!is_null($pDescriptorWrites)) $self->setPDescriptorWrites($pDescriptorWrites);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getStageFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setStageFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->stageFlags = $cValue;
    }

    /**
     * VkPipelineLayout/
     */
    public function getLayout(): VkPipelineLayout
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->layout;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setLayout(VkPipelineLayout $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->layout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSet(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->set;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSet(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->set = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorWriteCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorWriteCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorWriteCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorWriteCount = $cValue;
    }

    /**
     * VkWriteDescriptorSet* /
     */
    public function getPDescriptorWrites(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pDescriptorWrites;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkWriteDescriptorSet', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPDescriptorWrites(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDescriptorWrites = $cValue;
    }
}
