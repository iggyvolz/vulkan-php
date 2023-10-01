<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264CapabilitiesEXT
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
        mixed $flags = null,
        mixed $maxLevelIdc = null,
        null|int $maxSliceCount = null,
        null|int $maxPPictureL0ReferenceCount = null,
        null|int $maxBPictureL0ReferenceCount = null,
        null|int $maxL1ReferenceCount = null,
        null|int $maxTemporalLayerCount = null,
        null|bool $expectDyadicTemporalLayerPattern = null,
        null|int $minQp = null,
        null|int $maxQp = null,
        null|bool $prefersGopRemainingFrames = null,
        null|bool $requiresGopRemainingFrames = null,
        mixed $stdSyntaxFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264CapabilitiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($maxLevelIdc)) $self->setMaxLevelIdc($maxLevelIdc);
        if(!is_null($maxSliceCount)) $self->setMaxSliceCount($maxSliceCount);
        if(!is_null($maxPPictureL0ReferenceCount)) $self->setMaxPPictureL0ReferenceCount($maxPPictureL0ReferenceCount);
        if(!is_null($maxBPictureL0ReferenceCount)) $self->setMaxBPictureL0ReferenceCount($maxBPictureL0ReferenceCount);
        if(!is_null($maxL1ReferenceCount)) $self->setMaxL1ReferenceCount($maxL1ReferenceCount);
        if(!is_null($maxTemporalLayerCount)) $self->setMaxTemporalLayerCount($maxTemporalLayerCount);
        if(!is_null($expectDyadicTemporalLayerPattern)) $self->setExpectDyadicTemporalLayerPattern($expectDyadicTemporalLayerPattern);
        if(!is_null($minQp)) $self->setMinQp($minQp);
        if(!is_null($maxQp)) $self->setMaxQp($maxQp);
        if(!is_null($prefersGopRemainingFrames)) $self->setPrefersGopRemainingFrames($prefersGopRemainingFrames);
        if(!is_null($requiresGopRemainingFrames)) $self->setRequiresGopRemainingFrames($requiresGopRemainingFrames);
        if(!is_null($stdSyntaxFlags)) $self->setStdSyntaxFlags($stdSyntaxFlags);
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
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxLevelIdc(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxLevelIdc;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxLevelIdc(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxLevelIdc = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSliceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxSliceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSliceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSliceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPPictureL0ReferenceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPPictureL0ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPPictureL0ReferenceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPPictureL0ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxBPictureL0ReferenceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxBPictureL0ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxBPictureL0ReferenceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxBPictureL0ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxL1ReferenceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxL1ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxL1ReferenceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxL1ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTemporalLayerCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTemporalLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTemporalLayerCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTemporalLayerCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExpectDyadicTemporalLayerPattern(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->expectDyadicTemporalLayerPattern;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExpectDyadicTemporalLayerPattern(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->expectDyadicTemporalLayerPattern = $cValue;
    }

    /**
     * int32_t/
     */
    public function getMinQp(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minQp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinQp(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minQp = $cValue;
    }

    /**
     * int32_t/
     */
    public function getMaxQp(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxQp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxQp(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxQp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrefersGopRemainingFrames(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->prefersGopRemainingFrames;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrefersGopRemainingFrames(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->prefersGopRemainingFrames = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRequiresGopRemainingFrames(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->requiresGopRemainingFrames;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRequiresGopRemainingFrames(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->requiresGopRemainingFrames = $cValue;
    }

    /**
     * void* /
     */
    public function getStdSyntaxFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdSyntaxFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setStdSyntaxFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->stdSyntaxFlags = $cValue;
    }
}
