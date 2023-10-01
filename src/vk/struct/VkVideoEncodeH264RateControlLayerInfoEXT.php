<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264RateControlLayerInfoEXT
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
        null|bool $useMinQp = null,
        mixed $minQp = null,
        null|bool $useMaxQp = null,
        mixed $maxQp = null,
        null|bool $useMaxFrameSize = null,
        null|VkVideoEncodeH264FrameSizeEXT $maxFrameSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264RateControlLayerInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($useMinQp)) $self->setUseMinQp($useMinQp);
        if(!is_null($minQp)) $self->setMinQp($minQp);
        if(!is_null($useMaxQp)) $self->setUseMaxQp($useMaxQp);
        if(!is_null($maxQp)) $self->setMaxQp($maxQp);
        if(!is_null($useMaxFrameSize)) $self->setUseMaxFrameSize($useMaxFrameSize);
        if(!is_null($maxFrameSize)) $self->setMaxFrameSize($maxFrameSize);
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
     * uint32_t/
     */
    public function getUseMinQp(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->useMinQp;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUseMinQp(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->useMinQp = $cValue;
    }

    /**
     * void* /
     */
    public function getMinQp(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minQp;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMinQp(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->minQp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUseMaxQp(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->useMaxQp;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUseMaxQp(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->useMaxQp = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxQp(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxQp;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxQp(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxQp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUseMaxFrameSize(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->useMaxFrameSize;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUseMaxFrameSize(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->useMaxFrameSize = $cValue;
    }

    /**
     * VkVideoEncodeH264FrameSizeEXT/
     */
    public function getMaxFrameSize(): VkVideoEncodeH264FrameSizeEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxFrameSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkVideoEncodeH264FrameSizeEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxFrameSize(VkVideoEncodeH264FrameSizeEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxFrameSize = $cValue;
    }
}
