<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetVariableDescriptorCountAllocateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "descriptorSetCount" => $this->getDescriptorSetCount(),
          "pDescriptorCounts" => $this->getPDescriptorCounts(),
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
        null|int $descriptorSetCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pDescriptorCounts = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetVariableDescriptorCountAllocateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($descriptorSetCount)) $self->setDescriptorSetCount($descriptorSetCount);
        if(!is_null($pDescriptorCounts)) $self->setPDescriptorCounts($pDescriptorCounts);
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
     * uint32_t* /
     */
    public function getPDescriptorCounts(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pDescriptorCounts;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPDescriptorCounts(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDescriptorCounts = $cValue;
    }
}
