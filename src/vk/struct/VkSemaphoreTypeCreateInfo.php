<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSemaphoreTypeCreateInfo
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
        null|\iggyvolz\vulkan\enum\VkSemaphoreType $semaphoreType = null,
        null|int $initialValue = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSemaphoreTypeCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($semaphoreType)) $self->setSemaphoreType($semaphoreType);
        if(!is_null($initialValue)) $self->setInitialValue($initialValue);
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
     * VkSemaphoreType/
     */
    public function getSemaphoreType(): \iggyvolz\vulkan\enum\VkSemaphoreType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->semaphoreType;
        $phpValue = \iggyvolz\vulkan\enum\VkSemaphoreType::from($cValue);
        return $phpValue;
    }

    public function setSemaphoreType(\iggyvolz\vulkan\enum\VkSemaphoreType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->semaphoreType = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getInitialValue(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->initialValue;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInitialValue(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->initialValue = $cValue;
    }
}
