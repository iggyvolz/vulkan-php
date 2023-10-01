<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkLatencySleepInfoNV
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
        null|VkSemaphore $signalSemaphore = null,
        null|int $value = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkLatencySleepInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($signalSemaphore)) $self->setSignalSemaphore($signalSemaphore);
        if(!is_null($value)) $self->setValue($value);
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
     * VkSemaphore/
     */
    public function getSignalSemaphore(): VkSemaphore
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->signalSemaphore;
        $phpValue = new \iggyvolz\vulkan\struct\VkSemaphore($cValue, $ffi);
        return $phpValue;
    }

    public function setSignalSemaphore(VkSemaphore $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->signalSemaphore = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getValue(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->value;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setValue(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->value = $cValue;
    }
}
