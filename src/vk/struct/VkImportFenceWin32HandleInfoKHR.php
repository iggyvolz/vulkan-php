<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImportFenceWin32HandleInfoKHR
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
        null|VkFence $fence = null,
        mixed $flags = null,
        null|\iggyvolz\vulkan\enum\VkExternalFenceHandleTypeFlagBits $handleType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $handle = null,
        mixed $name = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImportFenceWin32HandleInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($fence)) $self->setFence($fence);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($handleType)) $self->setHandleType($handleType);
        if(!is_null($handle)) $self->setHandle($handle);
        if(!is_null($name)) $self->setName($name);
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
     * VkFence/
     */
    public function getFence(): VkFence
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fence;
        $phpValue = new \iggyvolz\vulkan\struct\VkFence($cValue, $ffi);
        return $phpValue;
    }

    public function setFence(VkFence $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->fence = $cValue;
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
     * VkExternalFenceHandleTypeFlagBits/
     */
    public function getHandleType(): \iggyvolz\vulkan\enum\VkExternalFenceHandleTypeFlagBits
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->handleType;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalFenceHandleTypeFlagBits::from($cValue);
        return $phpValue;
    }

    public function setHandleType(\iggyvolz\vulkan\enum\VkExternalFenceHandleTypeFlagBits $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->handleType = $cValue;
    }

    /**
     * void* /
     */
    public function getHandle(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->handle;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setHandle(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->handle = $cValue;
    }

    /**
     * void* /
     */
    public function getName(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->name;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setName(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->name = $cValue;
    }
}
