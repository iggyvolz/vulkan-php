<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkQueryPoolPerformanceCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "queueFamilyIndex" => $this->getQueueFamilyIndex(),
          "counterIndexCount" => $this->getCounterIndexCount(),
          "pCounterIndices" => $this->getPCounterIndices(),
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
        null|int $queueFamilyIndex = null,
        null|int $counterIndexCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pCounterIndices = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkQueryPoolPerformanceCreateInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($queueFamilyIndex)) $self->setQueueFamilyIndex($queueFamilyIndex);
        if(!is_null($counterIndexCount)) $self->setCounterIndexCount($counterIndexCount);
        if(!is_null($pCounterIndices)) $self->setPCounterIndices($pCounterIndices);
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
    public function getQueueFamilyIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queueFamilyIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueFamilyIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->queueFamilyIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCounterIndexCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->counterIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCounterIndexCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->counterIndexCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPCounterIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pCounterIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPCounterIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCounterIndices = $cValue;
    }
}
