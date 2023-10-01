<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkInstanceCreateInfo
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
        null|\iggyvolz\vulkan\util\ObjectPointer $pApplicationInfo = null,
        null|int $enabledLayerCount = null,
        mixed $ppEnabledLayerNames = null,
        null|int $enabledExtensionCount = null,
        mixed $ppEnabledExtensionNames = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkInstanceCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($pApplicationInfo)) $self->setPApplicationInfo($pApplicationInfo);
        if(!is_null($enabledLayerCount)) $self->setEnabledLayerCount($enabledLayerCount);
        if(!is_null($ppEnabledLayerNames)) $self->setPpEnabledLayerNames($ppEnabledLayerNames);
        if(!is_null($enabledExtensionCount)) $self->setEnabledExtensionCount($enabledExtensionCount);
        if(!is_null($ppEnabledExtensionNames)) $self->setPpEnabledExtensionNames($ppEnabledExtensionNames);
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
     * VkApplicationInfo* /
     */
    public function getPApplicationInfo(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pApplicationInfo;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkApplicationInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPApplicationInfo(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pApplicationInfo = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEnabledLayerCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->enabledLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEnabledLayerCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->enabledLayerCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPpEnabledLayerNames(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->ppEnabledLayerNames;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPpEnabledLayerNames(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->ppEnabledLayerNames = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEnabledExtensionCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->enabledExtensionCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEnabledExtensionCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->enabledExtensionCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPpEnabledExtensionNames(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->ppEnabledExtensionNames;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPpEnabledExtensionNames(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->ppEnabledExtensionNames = $cValue;
    }
}
