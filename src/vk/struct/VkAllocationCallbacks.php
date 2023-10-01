<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAllocationCallbacks
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pUserData = null,
        mixed $pfnAllocation = null,
        mixed $pfnReallocation = null,
        mixed $pfnFree = null,
        mixed $pfnInternalAllocation = null,
        mixed $pfnInternalFree = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAllocationCallbacks', false), $vulkan->ffi);
        if(!is_null($pUserData)) $self->setPUserData($pUserData);
        if(!is_null($pfnAllocation)) $self->setPfnAllocation($pfnAllocation);
        if(!is_null($pfnReallocation)) $self->setPfnReallocation($pfnReallocation);
        if(!is_null($pfnFree)) $self->setPfnFree($pfnFree);
        if(!is_null($pfnInternalAllocation)) $self->setPfnInternalAllocation($pfnInternalAllocation);
        if(!is_null($pfnInternalFree)) $self->setPfnInternalFree($pfnInternalFree);
        return $self;
    }

    /**
     * void* /
     */
    public function getPUserData(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pUserData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPUserData(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pUserData = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnAllocation(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pfnAllocation;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnAllocation(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnAllocation = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnReallocation(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pfnReallocation;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnReallocation(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnReallocation = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnFree(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pfnFree;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnFree(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnFree = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnInternalAllocation(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pfnInternalAllocation;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnInternalAllocation(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnInternalAllocation = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnInternalFree(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pfnInternalFree;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnInternalFree(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnInternalFree = $cValue;
    }
}
