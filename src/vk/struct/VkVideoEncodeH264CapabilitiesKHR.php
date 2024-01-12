<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264CapabilitiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "maxLevelIdc" => $this->getMaxLevelIdc(),
          "maxSliceCount" => $this->getMaxSliceCount(),
          "maxPPictureL0ReferenceCount" => $this->getMaxPPictureL0ReferenceCount(),
          "maxBPictureL0ReferenceCount" => $this->getMaxBPictureL0ReferenceCount(),
          "maxL1ReferenceCount" => $this->getMaxL1ReferenceCount(),
          "maxTemporalLayerCount" => $this->getMaxTemporalLayerCount(),
          "expectDyadicTemporalLayerPattern" => $this->getExpectDyadicTemporalLayerPattern(),
          "minQp" => $this->getMinQp(),
          "maxQp" => $this->getMaxQp(),
          "prefersGopRemainingFrames" => $this->getPrefersGopRemainingFrames(),
          "requiresGopRemainingFrames" => $this->getRequiresGopRemainingFrames(),
          "stdSyntaxFlags" => $this->getStdSyntaxFlags(),
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
        null|array $stdSyntaxFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264CapabilitiesKHR', false), $vulkan);
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
     * VkVideoEncodeH264CapabilityFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeH264CapabilityFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeH264CapabilityFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxLevelIdc(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxLevelIdc;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxLevelIdc(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxLevelIdc = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSliceCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSliceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSliceCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSliceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPPictureL0ReferenceCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPPictureL0ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPPictureL0ReferenceCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPPictureL0ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxBPictureL0ReferenceCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxBPictureL0ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxBPictureL0ReferenceCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxBPictureL0ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxL1ReferenceCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxL1ReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxL1ReferenceCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxL1ReferenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTemporalLayerCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTemporalLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTemporalLayerCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTemporalLayerCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExpectDyadicTemporalLayerPattern(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->expectDyadicTemporalLayerPattern;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExpectDyadicTemporalLayerPattern(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->expectDyadicTemporalLayerPattern = $cValue;
    }

    /**
     * int32_t/
     */
    public function getMinQp(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minQp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinQp(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minQp = $cValue;
    }

    /**
     * int32_t/
     */
    public function getMaxQp(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxQp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxQp(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxQp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrefersGopRemainingFrames(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->prefersGopRemainingFrames;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrefersGopRemainingFrames(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->prefersGopRemainingFrames = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRequiresGopRemainingFrames(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->requiresGopRemainingFrames;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRequiresGopRemainingFrames(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->requiresGopRemainingFrames = $cValue;
    }

    /**
     * VkVideoEncodeH264StdFlagsKHR/
     */
    public function getStdSyntaxFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stdSyntaxFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeH264StdFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setStdSyntaxFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeH264StdFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->stdSyntaxFlags = $cValue;
    }
}
