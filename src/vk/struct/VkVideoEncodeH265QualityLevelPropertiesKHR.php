<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH265QualityLevelPropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "preferredRateControlFlags" => $this->getPreferredRateControlFlags(),
          "preferredGopFrameCount" => $this->getPreferredGopFrameCount(),
          "preferredIdrPeriod" => $this->getPreferredIdrPeriod(),
          "preferredConsecutiveBFrameCount" => $this->getPreferredConsecutiveBFrameCount(),
          "preferredSubLayerCount" => $this->getPreferredSubLayerCount(),
          "preferredConstantQp" => $this->getPreferredConstantQp(),
          "preferredMaxL0ReferenceCount" => $this->getPreferredMaxL0ReferenceCount(),
          "preferredMaxL1ReferenceCount" => $this->getPreferredMaxL1ReferenceCount(),
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
        null|array $preferredRateControlFlags = null,
        null|int $preferredGopFrameCount = null,
        null|int $preferredIdrPeriod = null,
        null|int $preferredConsecutiveBFrameCount = null,
        null|int $preferredSubLayerCount = null,
        mixed $preferredConstantQp = null,
        null|int $preferredMaxL0ReferenceCount = null,
        null|int $preferredMaxL1ReferenceCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH265QualityLevelPropertiesKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($preferredRateControlFlags)) $self->setPreferredRateControlFlags($preferredRateControlFlags);
        if(!is_null($preferredGopFrameCount)) $self->setPreferredGopFrameCount($preferredGopFrameCount);
        if(!is_null($preferredIdrPeriod)) $self->setPreferredIdrPeriod($preferredIdrPeriod);
        if(!is_null($preferredConsecutiveBFrameCount)) $self->setPreferredConsecutiveBFrameCount($preferredConsecutiveBFrameCount);
        if(!is_null($preferredSubLayerCount)) $self->setPreferredSubLayerCount($preferredSubLayerCount);
        if(!is_null($preferredConstantQp)) $self->setPreferredConstantQp($preferredConstantQp);
        if(!is_null($preferredMaxL0ReferenceCount)) $self->setPreferredMaxL0ReferenceCount($preferredMaxL0ReferenceCount);
        if(!is_null($preferredMaxL1ReferenceCount)) $self->setPreferredMaxL1ReferenceCount($preferredMaxL1ReferenceCount);
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
     * VkVideoEncodeH265RateControlFlagsKHR/
     */
    public function getPreferredRateControlFlags(): array
    {
        $cValue = $this->cdata->preferredRateControlFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeH265RateControlFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setPreferredRateControlFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeH265RateControlFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->preferredRateControlFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredGopFrameCount(): int
    {
        $cValue = $this->cdata->preferredGopFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredGopFrameCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preferredGopFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredIdrPeriod(): int
    {
        $cValue = $this->cdata->preferredIdrPeriod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredIdrPeriod(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preferredIdrPeriod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredConsecutiveBFrameCount(): int
    {
        $cValue = $this->cdata->preferredConsecutiveBFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredConsecutiveBFrameCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preferredConsecutiveBFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredSubLayerCount(): int
    {
        $cValue = $this->cdata->preferredSubLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredSubLayerCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preferredSubLayerCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPreferredConstantQp(): mixed
    {
        $cValue = $this->cdata->preferredConstantQp;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPreferredConstantQp(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->preferredConstantQp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredMaxL0ReferenceCount(): int
    {
        $cValue = $this->cdata->preferredMaxL0ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredMaxL0ReferenceCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preferredMaxL0ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredMaxL1ReferenceCount(): int
    {
        $cValue = $this->cdata->preferredMaxL1ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredMaxL1ReferenceCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preferredMaxL1ReferenceCount = $cValue;
    }
}
