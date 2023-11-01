<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264QualityLevelPropertiesEXT
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
        null|array $preferredRateControlFlags = null,
        null|int $preferredGopFrameCount = null,
        null|int $preferredIdrPeriod = null,
        null|int $preferredConsecutiveBFrameCount = null,
        null|int $preferredTemporalLayerCount = null,
        mixed $preferredConstantQp = null,
        null|int $preferredMaxL0ReferenceCount = null,
        null|int $preferredMaxL1ReferenceCount = null,
        null|bool $preferredStdEntropyCodingModeFlag = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264QualityLevelPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($preferredRateControlFlags)) $self->setPreferredRateControlFlags($preferredRateControlFlags);
        if(!is_null($preferredGopFrameCount)) $self->setPreferredGopFrameCount($preferredGopFrameCount);
        if(!is_null($preferredIdrPeriod)) $self->setPreferredIdrPeriod($preferredIdrPeriod);
        if(!is_null($preferredConsecutiveBFrameCount)) $self->setPreferredConsecutiveBFrameCount($preferredConsecutiveBFrameCount);
        if(!is_null($preferredTemporalLayerCount)) $self->setPreferredTemporalLayerCount($preferredTemporalLayerCount);
        if(!is_null($preferredConstantQp)) $self->setPreferredConstantQp($preferredConstantQp);
        if(!is_null($preferredMaxL0ReferenceCount)) $self->setPreferredMaxL0ReferenceCount($preferredMaxL0ReferenceCount);
        if(!is_null($preferredMaxL1ReferenceCount)) $self->setPreferredMaxL1ReferenceCount($preferredMaxL1ReferenceCount);
        if(!is_null($preferredStdEntropyCodingModeFlag)) $self->setPreferredStdEntropyCodingModeFlag($preferredStdEntropyCodingModeFlag);
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
     * VkVideoEncodeH264RateControlFlagsEXT/
     */
    public function getPreferredRateControlFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredRateControlFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeH264RateControlFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setPreferredRateControlFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeH264RateControlFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->preferredRateControlFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredGopFrameCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredGopFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredGopFrameCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->preferredGopFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredIdrPeriod(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredIdrPeriod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredIdrPeriod(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->preferredIdrPeriod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredConsecutiveBFrameCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredConsecutiveBFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredConsecutiveBFrameCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->preferredConsecutiveBFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredTemporalLayerCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredTemporalLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredTemporalLayerCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->preferredTemporalLayerCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPreferredConstantQp(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredConstantQp;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPreferredConstantQp(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->preferredConstantQp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredMaxL0ReferenceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredMaxL0ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredMaxL0ReferenceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->preferredMaxL0ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredMaxL1ReferenceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredMaxL1ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredMaxL1ReferenceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->preferredMaxL1ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredStdEntropyCodingModeFlag(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preferredStdEntropyCodingModeFlag;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPreferredStdEntropyCodingModeFlag(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->preferredStdEntropyCodingModeFlag = $cValue;
    }
}
