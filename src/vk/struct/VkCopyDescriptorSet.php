<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyDescriptorSet implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcSet" => $this->getSrcSet(),
          "srcBinding" => $this->getSrcBinding(),
          "srcArrayElement" => $this->getSrcArrayElement(),
          "dstSet" => $this->getDstSet(),
          "dstBinding" => $this->getDstBinding(),
          "dstArrayElement" => $this->getDstArrayElement(),
          "descriptorCount" => $this->getDescriptorCount(),
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
        null|VkDescriptorSet $srcSet = null,
        null|int $srcBinding = null,
        null|int $srcArrayElement = null,
        null|VkDescriptorSet $dstSet = null,
        null|int $dstBinding = null,
        null|int $dstArrayElement = null,
        null|int $descriptorCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyDescriptorSet', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcSet)) $self->setSrcSet($srcSet);
        if(!is_null($srcBinding)) $self->setSrcBinding($srcBinding);
        if(!is_null($srcArrayElement)) $self->setSrcArrayElement($srcArrayElement);
        if(!is_null($dstSet)) $self->setDstSet($dstSet);
        if(!is_null($dstBinding)) $self->setDstBinding($dstBinding);
        if(!is_null($dstArrayElement)) $self->setDstArrayElement($dstArrayElement);
        if(!is_null($descriptorCount)) $self->setDescriptorCount($descriptorCount);
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
     * VkDescriptorSet/
     */
    public function getSrcSet(): VkDescriptorSet
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcSet;
        $phpValue = new \iggyvolz\vulkan\struct\VkDescriptorSet($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcSet(VkDescriptorSet $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcSet = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSrcBinding(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcBinding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcBinding(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->srcBinding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSrcArrayElement(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcArrayElement;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcArrayElement(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->srcArrayElement = $cValue;
    }

    /**
     * VkDescriptorSet/
     */
    public function getDstSet(): VkDescriptorSet
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstSet;
        $phpValue = new \iggyvolz\vulkan\struct\VkDescriptorSet($cValue, $ffi);
        return $phpValue;
    }

    public function setDstSet(VkDescriptorSet $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstSet = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstBinding(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstBinding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstBinding(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dstBinding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstArrayElement(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstArrayElement;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstArrayElement(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dstArrayElement = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorCount = $cValue;
    }
}
