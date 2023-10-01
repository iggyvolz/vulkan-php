<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorPoolCreateInfo
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        mixed $flags = null,
        null|int $maxSets = null,
        null|int $poolSizeCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPoolSizes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorPoolCreateInfo', false), $vulkan->ffi);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSets(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxSets;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSets(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSets = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPoolSizeCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->poolSizeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPoolSizeCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->poolSizeCount = $cValue;
    }

    /**
     * VkDescriptorPoolSize* /
     */
    public function getPPoolSizes(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPoolSizes;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorPoolSize', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPoolSizes(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPoolSizes = $cValue;
    }
}
