<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH265RateControlInfoEXT
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
        null|array $flags = null,
        null|int $gopFrameCount = null,
        null|int $idrPeriod = null,
        null|int $consecutiveBFrameCount = null,
        null|int $subLayerCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH265RateControlInfoEXT', false), $vulkan->ffi);
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
     * VkVideoEncodeH265RateControlFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeH265RateControlFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeH265RateControlFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGopFrameCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gopFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGopFrameCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gopFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIdrPeriod(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->idrPeriod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIdrPeriod(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->idrPeriod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getConsecutiveBFrameCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->consecutiveBFrameCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setConsecutiveBFrameCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->consecutiveBFrameCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubLayerCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubLayerCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->subLayerCount = $cValue;
    }
}
