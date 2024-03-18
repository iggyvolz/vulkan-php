<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetAllocateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "descriptorPool" => $this->getDescriptorPool(),
          "descriptorSetCount" => $this->getDescriptorSetCount(),
          "pSetLayouts" => $this->getPSetLayouts(),
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
        null|VkDescriptorPool $descriptorPool = null,
        null|int $descriptorSetCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSetLayouts = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetAllocateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($descriptorPool)) $self->setDescriptorPool($descriptorPool);
        if(!is_null($descriptorSetCount)) $self->setDescriptorSetCount($descriptorSetCount);
        if(!is_null($pSetLayouts)) $self->setPSetLayouts($pSetLayouts);
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
     * VkDescriptorPool/
     */
    public function getDescriptorPool(): VkDescriptorPool
    {
        $cValue = $this->cdata->descriptorPool;
        $phpValue = new \iggyvolz\vulkan\struct\VkDescriptorPool($cValue, $ffi);
        return $phpValue;
    }

    public function setDescriptorPool(VkDescriptorPool $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->descriptorPool = $cValue;
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
     * VkDescriptorSetLayout* /
     */
    public function getPSetLayouts(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pSetLayouts;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorSetLayout', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSetLayouts(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSetLayouts = $cValue;
    }
}
