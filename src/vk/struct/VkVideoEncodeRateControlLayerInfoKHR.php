<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeRateControlLayerInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "averageBitrate" => $this->getAverageBitrate(),
          "maxBitrate" => $this->getMaxBitrate(),
          "frameRateNumerator" => $this->getFrameRateNumerator(),
          "frameRateDenominator" => $this->getFrameRateDenominator(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $averageBitrate = null,
        null|int $maxBitrate = null,
        null|int $frameRateNumerator = null,
        null|int $frameRateDenominator = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeRateControlLayerInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($averageBitrate)) $self->setAverageBitrate($averageBitrate);
        if(!is_null($maxBitrate)) $self->setMaxBitrate($maxBitrate);
        if(!is_null($frameRateNumerator)) $self->setFrameRateNumerator($frameRateNumerator);
        if(!is_null($frameRateDenominator)) $self->setFrameRateDenominator($frameRateDenominator);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getAverageBitrate(): int
    {
        $cValue = $this->cdata->averageBitrate;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAverageBitrate(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->averageBitrate = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxBitrate(): int
    {
        $cValue = $this->cdata->maxBitrate;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxBitrate(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxBitrate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFrameRateNumerator(): int
    {
        $cValue = $this->cdata->frameRateNumerator;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFrameRateNumerator(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->frameRateNumerator = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFrameRateDenominator(): int
    {
        $cValue = $this->cdata->frameRateDenominator;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFrameRateDenominator(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->frameRateDenominator = $cValue;
    }
}
