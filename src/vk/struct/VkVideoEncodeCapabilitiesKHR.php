<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeCapabilitiesKHR
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
        mixed $rateControlModes = null,
        null|int $maxRateControlLayers = null,
        null|int $maxBitrate = null,
        null|int $maxQualityLevels = null,
        null|VkExtent2D $encodeInputPictureGranularity = null,
        mixed $supportedEncodeFeedbackFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeCapabilitiesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($rateControlModes)) $self->setRateControlModes($rateControlModes);
        if(!is_null($maxRateControlLayers)) $self->setMaxRateControlLayers($maxRateControlLayers);
        if(!is_null($maxBitrate)) $self->setMaxBitrate($maxBitrate);
        if(!is_null($maxQualityLevels)) $self->setMaxQualityLevels($maxQualityLevels);
        if(!is_null($encodeInputPictureGranularity)) $self->setEncodeInputPictureGranularity($encodeInputPictureGranularity);
        if(!is_null($supportedEncodeFeedbackFlags)) $self->setSupportedEncodeFeedbackFlags($supportedEncodeFeedbackFlags);
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
    public function getRateControlModes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rateControlModes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setRateControlModes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->rateControlModes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRateControlLayers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxRateControlLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRateControlLayers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxRateControlLayers = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxBitrate(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxBitrate;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxBitrate(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxBitrate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxQualityLevels(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxQualityLevels;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxQualityLevels(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxQualityLevels = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getEncodeInputPictureGranularity(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->encodeInputPictureGranularity;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setEncodeInputPictureGranularity(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->encodeInputPictureGranularity = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedEncodeFeedbackFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedEncodeFeedbackFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedEncodeFeedbackFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedEncodeFeedbackFlags = $cValue;
    }
}
