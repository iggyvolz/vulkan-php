<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeUsageInfoKHR
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
        mixed $videoUsageHints = null,
        mixed $videoContentHints = null,
        null|\iggyvolz\vulkan\enum\VkVideoEncodeTuningModeKHR $tuningMode = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeUsageInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($videoUsageHints)) $self->setVideoUsageHints($videoUsageHints);
        if(!is_null($videoContentHints)) $self->setVideoContentHints($videoContentHints);
        if(!is_null($tuningMode)) $self->setTuningMode($tuningMode);
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
    public function getVideoUsageHints(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->videoUsageHints;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setVideoUsageHints(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->videoUsageHints = $cValue;
    }

    /**
     * void* /
     */
    public function getVideoContentHints(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->videoContentHints;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setVideoContentHints(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->videoContentHints = $cValue;
    }

    /**
     * VkVideoEncodeTuningModeKHR/
     */
    public function getTuningMode(): \iggyvolz\vulkan\enum\VkVideoEncodeTuningModeKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tuningMode;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeTuningModeKHR::from($cValue);
        return $phpValue;
    }

    public function setTuningMode(\iggyvolz\vulkan\enum\VkVideoEncodeTuningModeKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->tuningMode = $cValue;
    }
}
