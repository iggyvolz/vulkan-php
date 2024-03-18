<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetLayoutCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "bindingCount" => $this->getBindingCount(),
          "pBindings" => $this->getPBindings(),
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
        null|array $flags = null,
        null|int $bindingCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBindings = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetLayoutCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($bindingCount)) $self->setBindingCount($bindingCount);
        if(!is_null($pBindings)) $self->setPBindings($pBindings);
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
     * VkDescriptorSetLayoutCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkDescriptorSetLayoutCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkDescriptorSetLayoutCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBindingCount(): int
    {
        $cValue = $this->cdata->bindingCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBindingCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bindingCount = $cValue;
    }

    /**
     * VkDescriptorSetLayoutBinding* /
     */
    public function getPBindings(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pBindings;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorSetLayoutBinding', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPBindings(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pBindings = $cValue;
    }
}
