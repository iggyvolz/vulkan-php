<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAllocationCallbacks implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "pUserData" => $this->getPUserData(),
          "pfnAllocation" => $this->getPfnAllocation(),
          "pfnReallocation" => $this->getPfnReallocation(),
          "pfnFree" => $this->getPfnFree(),
          "pfnInternalAllocation" => $this->getPfnInternalAllocation(),
          "pfnInternalFree" => $this->getPfnInternalFree(),
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
        null|\iggyvolz\vulkan\util\Pointer $pUserData = null,
        mixed $pfnAllocation = null,
        mixed $pfnReallocation = null,
        mixed $pfnFree = null,
        mixed $pfnInternalAllocation = null,
        mixed $pfnInternalFree = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAllocationCallbacks', false));
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
    public function getPUserData(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pUserData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPUserData(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pUserData = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnAllocation(): mixed
    {
        $cValue = $this->cdata->pfnAllocation;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnAllocation(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnAllocation = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnReallocation(): mixed
    {
        $cValue = $this->cdata->pfnReallocation;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnReallocation(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnReallocation = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnFree(): mixed
    {
        $cValue = $this->cdata->pfnFree;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnFree(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnFree = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnInternalAllocation(): mixed
    {
        $cValue = $this->cdata->pfnInternalAllocation;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnInternalAllocation(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnInternalAllocation = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnInternalFree(): mixed
    {
        $cValue = $this->cdata->pfnInternalFree;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnInternalFree(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnInternalFree = $cValue;
    }
}
