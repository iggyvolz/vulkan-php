<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH265RateControlInfoKHR implements \JsonSerializable
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
          "subLayerCount" => $this->getSubLayerCount(),
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
        null|array $flags = null,
        null|int $gopFrameCount = null,
        null|int $idrPeriod = null,
        null|int $consecutiveBFrameCount = null,
        null|int $subLayerCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH265RateControlInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($gopFrameCount)) $self->setGopFrameCount($gopFrameCount);
        if(!is_null($idrPeriod)) $self->setIdrPeriod($idrPeriod);
        if(!is_null($consecutiveBFrameCount)) $self->setConsecutiveBFrameCount($consecutiveBFrameCount);
        if(!is_null($subLayerCount)) $self->setSubLayerCount($subLayerCount);
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
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeH265RateControlFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeH265RateControlFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGopFrameCount(): int
    {
        $cValue = $this->cdata->gopFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGopFrameCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->gopFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIdrPeriod(): int
    {
        $cValue = $this->cdata->idrPeriod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIdrPeriod(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->idrPeriod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getConsecutiveBFrameCount(): int
    {
        $cValue = $this->cdata->consecutiveBFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setConsecutiveBFrameCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->consecutiveBFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubLayerCount(): int
    {
        $cValue = $this->cdata->subLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubLayerCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->subLayerCount = $cValue;
    }
}
