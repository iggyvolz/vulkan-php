<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorPoolCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "maxSets" => $this->getMaxSets(),
          "poolSizeCount" => $this->getPoolSizeCount(),
          "pPoolSizes" => $this->getPPoolSizes(),
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
        null|array $flags = null,
        null|int $maxSets = null,
        null|int $poolSizeCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPoolSizes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorPoolCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($maxSets)) $self->setMaxSets($maxSets);
        if(!is_null($poolSizeCount)) $self->setPoolSizeCount($poolSizeCount);
        if(!is_null($pPoolSizes)) $self->setPPoolSizes($pPoolSizes);
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
     * VkDescriptorPoolCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkDescriptorPoolCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkDescriptorPoolCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSets(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSets;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSets(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSets = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPoolSizeCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->poolSizeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPoolSizeCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->poolSizeCount = $cValue;
    }

    /**
     * VkDescriptorPoolSize* /
     */
    public function getPPoolSizes(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pPoolSizes;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorPoolSize', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPPoolSizes(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPoolSizes = $cValue;
    }
}
