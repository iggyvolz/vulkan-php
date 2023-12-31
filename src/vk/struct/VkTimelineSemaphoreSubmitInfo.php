<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkTimelineSemaphoreSubmitInfo
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
        null|int $waitSemaphoreValueCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pWaitSemaphoreValues = null,
        null|int $signalSemaphoreValueCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pSignalSemaphoreValues = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkTimelineSemaphoreSubmitInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($waitSemaphoreValueCount)) $self->setWaitSemaphoreValueCount($waitSemaphoreValueCount);
        if(!is_null($pWaitSemaphoreValues)) $self->setPWaitSemaphoreValues($pWaitSemaphoreValues);
        if(!is_null($signalSemaphoreValueCount)) $self->setSignalSemaphoreValueCount($signalSemaphoreValueCount);
        if(!is_null($pSignalSemaphoreValues)) $self->setPSignalSemaphoreValues($pSignalSemaphoreValues);
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
    public function getWaitSemaphoreValueCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->waitSemaphoreValueCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWaitSemaphoreValueCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->waitSemaphoreValueCount = $cValue;
    }

    /**
     * uint64_t* /
     */
    public function getPWaitSemaphoreValues(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pWaitSemaphoreValues;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPWaitSemaphoreValues(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pWaitSemaphoreValues = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSignalSemaphoreValueCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->signalSemaphoreValueCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSignalSemaphoreValueCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->signalSemaphoreValueCount = $cValue;
    }

    /**
     * uint64_t* /
     */
    public function getPSignalSemaphoreValues(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSignalSemaphoreValues;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPSignalSemaphoreValues(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSignalSemaphoreValues = $cValue;
    }
}
