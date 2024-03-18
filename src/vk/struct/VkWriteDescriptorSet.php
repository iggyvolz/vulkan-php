<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkWriteDescriptorSet implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "dstSet" => $this->getDstSet(),
          "dstBinding" => $this->getDstBinding(),
          "dstArrayElement" => $this->getDstArrayElement(),
          "descriptorCount" => $this->getDescriptorCount(),
          "descriptorType" => $this->getDescriptorType(),
          "pImageInfo" => $this->getPImageInfo(),
          "pBufferInfo" => $this->getPBufferInfo(),
          "pTexelBufferView" => $this->getPTexelBufferView(),
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
        null|VkDescriptorSet $dstSet = null,
        null|int $dstBinding = null,
        null|int $dstArrayElement = null,
        null|int $descriptorCount = null,
        null|\iggyvolz\vulkan\enum\VkDescriptorType $descriptorType = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pImageInfo = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBufferInfo = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pTexelBufferView = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkWriteDescriptorSet', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($dstSet)) $self->setDstSet($dstSet);
        if(!is_null($dstBinding)) $self->setDstBinding($dstBinding);
        if(!is_null($dstArrayElement)) $self->setDstArrayElement($dstArrayElement);
        if(!is_null($descriptorCount)) $self->setDescriptorCount($descriptorCount);
        if(!is_null($descriptorType)) $self->setDescriptorType($descriptorType);
        if(!is_null($pImageInfo)) $self->setPImageInfo($pImageInfo);
        if(!is_null($pBufferInfo)) $self->setPBufferInfo($pBufferInfo);
        if(!is_null($pTexelBufferView)) $self->setPTexelBufferView($pTexelBufferView);
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
     * VkDescriptorSet/
     */
    public function getDstSet(): VkDescriptorSet
    {
        $cValue = $this->cdata->dstSet;
        $phpValue = new \iggyvolz\vulkan\struct\VkDescriptorSet($cValue, $ffi);
        return $phpValue;
    }

    public function setDstSet(VkDescriptorSet $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->dstSet = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstBinding(): int
    {
        $cValue = $this->cdata->dstBinding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstBinding(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dstBinding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstArrayElement(): int
    {
        $cValue = $this->cdata->dstArrayElement;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstArrayElement(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dstArrayElement = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorCount(): int
    {
        $cValue = $this->cdata->descriptorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->descriptorCount = $cValue;
    }

    /**
     * VkDescriptorType/
     */
    public function getDescriptorType(): \iggyvolz\vulkan\enum\VkDescriptorType
    {
        $cValue = $this->cdata->descriptorType;
        $phpValue = \iggyvolz\vulkan\enum\VkDescriptorType::from($cValue);
        return $phpValue;
    }

    public function setDescriptorType(\iggyvolz\vulkan\enum\VkDescriptorType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->descriptorType = $cValue;
    }

    /**
     * VkDescriptorImageInfo* /
     */
    public function getPImageInfo(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pImageInfo;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorImageInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPImageInfo(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pImageInfo = $cValue;
    }

    /**
     * VkDescriptorBufferInfo* /
     */
    public function getPBufferInfo(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pBufferInfo;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorBufferInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPBufferInfo(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pBufferInfo = $cValue;
    }

    /**
     * VkBufferView* /
     */
    public function getPTexelBufferView(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pTexelBufferView;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkBufferView', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPTexelBufferView(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pTexelBufferView = $cValue;
    }
}
