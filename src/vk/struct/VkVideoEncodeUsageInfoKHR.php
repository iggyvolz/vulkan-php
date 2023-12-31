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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $videoUsageHints = null,
        null|array $videoContentHints = null,
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkVideoEncodeUsageFlagsKHR/
     */
    public function getVideoUsageHints(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->videoUsageHints;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeUsageFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setVideoUsageHints(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeUsageFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->videoUsageHints = $cValue;
    }

    /**
     * VkVideoEncodeContentFlagsKHR/
     */
    public function getVideoContentHints(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->videoContentHints;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeContentFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setVideoContentHints(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoEncodeContentFlagBitsKHR::toInt(...$phpValue);
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
