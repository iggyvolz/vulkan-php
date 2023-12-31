<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFaultCallbackInfo
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $faultCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pFaults = null,
        mixed $pfnFaultCallback = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFaultCallbackInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($faultCount)) $self->setFaultCount($faultCount);
        if(!is_null($pFaults)) $self->setPFaults($pFaults);
        if(!is_null($pfnFaultCallback)) $self->setPfnFaultCallback($pfnFaultCallback);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFaultCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->faultCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFaultCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->faultCount = $cValue;
    }

    /**
     * VkFaultData* /
     */
    public function getPFaults(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pFaults;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkFaultData', $cValue, $ffi);
        return $phpValue;
    }

    public function setPFaults(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pFaults = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnFaultCallback(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pfnFaultCallback;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnFaultCallback(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnFaultCallback = $cValue;
    }
}
