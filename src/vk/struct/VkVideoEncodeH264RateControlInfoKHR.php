<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264RateControlInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "gopFrameCount" => $this->getGopFrameCount(),
          "idrPeriod" => $this->getIdrPeriod(),
          "consecutiveBFrameCount" => $this->getConsecutiveBFrameCount(),
          "temporalLayerCount" => $this->getTemporalLayerCount(),
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
        null|array $flags = null,
        null|int $gopFrameCount = null,
        null|int $idrPeriod = null,
        null|int $consecutiveBFrameCount = null,
        null|int $temporalLayerCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264RateControlInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($gopFrameCount)) $self->setGopFrameCount($gopFrameCount);
        if(!is_null($idrPeriod)) $self->setIdrPeriod($idrPeriod);
        if(!is_null($consecutiveBFrameCount)) $self->setConsecutiveBFrameCount($consecutiveBFrameCount);
        if(!is_null($temporalLayerCount)) $self->setTemporalLayerCount($temporalLayerCount);
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
     * VkVideoEncodeH264RateControlFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeH264RateControlFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeH264RateControlFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGopFrameCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->gopFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGopFrameCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->gopFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIdrPeriod(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->idrPeriod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIdrPeriod(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->idrPeriod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getConsecutiveBFrameCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->consecutiveBFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setConsecutiveBFrameCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->consecutiveBFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTemporalLayerCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->temporalLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTemporalLayerCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->temporalLayerCount = $cValue;
    }
}
