<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkD3D12FenceSubmitInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "waitSemaphoreValuesCount" => $this->getWaitSemaphoreValuesCount(),
          "pWaitSemaphoreValues" => $this->getPWaitSemaphoreValues(),
          "signalSemaphoreValuesCount" => $this->getSignalSemaphoreValuesCount(),
          "pSignalSemaphoreValues" => $this->getPSignalSemaphoreValues(),
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
        null|int $waitSemaphoreValuesCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pWaitSemaphoreValues = null,
        null|int $signalSemaphoreValuesCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pSignalSemaphoreValues = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkD3D12FenceSubmitInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($waitSemaphoreValuesCount)) $self->setWaitSemaphoreValuesCount($waitSemaphoreValuesCount);
        if(!is_null($pWaitSemaphoreValues)) $self->setPWaitSemaphoreValues($pWaitSemaphoreValues);
        if(!is_null($signalSemaphoreValuesCount)) $self->setSignalSemaphoreValuesCount($signalSemaphoreValuesCount);
        if(!is_null($pSignalSemaphoreValues)) $self->setPSignalSemaphoreValues($pSignalSemaphoreValues);
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
     * uint32_t/
     */
    public function getWaitSemaphoreValuesCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->waitSemaphoreValuesCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWaitSemaphoreValuesCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->waitSemaphoreValuesCount = $cValue;
    }

    /**
     * uint64_t* /
     */
    public function getPWaitSemaphoreValues(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pWaitSemaphoreValues;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPWaitSemaphoreValues(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pWaitSemaphoreValues = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSignalSemaphoreValuesCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->signalSemaphoreValuesCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSignalSemaphoreValuesCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->signalSemaphoreValuesCount = $cValue;
    }

    /**
     * uint64_t* /
     */
    public function getPSignalSemaphoreValues(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pSignalSemaphoreValues;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPSignalSemaphoreValues(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSignalSemaphoreValues = $cValue;
    }
}
