<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkLatencyTimingsFrameReportNV
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
        null|int $presentID = null,
        null|int $inputSampleTimeUs = null,
        null|int $simStartTimeUs = null,
        null|int $simEndTimeUs = null,
        null|int $renderSubmitStartTimeUs = null,
        null|int $renderSubmitEndTimeUs = null,
        null|int $presentStartTimeUs = null,
        null|int $presentEndTimeUs = null,
        null|int $driverStartTimeUs = null,
        null|int $driverEndTimeUs = null,
        null|int $osRenderQueueStartTimeUs = null,
        null|int $osRenderQueueEndTimeUs = null,
        null|int $gpuRenderStartTimeUs = null,
        null|int $gpuRenderEndTimeUs = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkLatencyTimingsFrameReportNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($presentID)) $self->setPresentID($presentID);
        if(!is_null($inputSampleTimeUs)) $self->setInputSampleTimeUs($inputSampleTimeUs);
        if(!is_null($simStartTimeUs)) $self->setSimStartTimeUs($simStartTimeUs);
        if(!is_null($simEndTimeUs)) $self->setSimEndTimeUs($simEndTimeUs);
        if(!is_null($renderSubmitStartTimeUs)) $self->setRenderSubmitStartTimeUs($renderSubmitStartTimeUs);
        if(!is_null($renderSubmitEndTimeUs)) $self->setRenderSubmitEndTimeUs($renderSubmitEndTimeUs);
        if(!is_null($presentStartTimeUs)) $self->setPresentStartTimeUs($presentStartTimeUs);
        if(!is_null($presentEndTimeUs)) $self->setPresentEndTimeUs($presentEndTimeUs);
        if(!is_null($driverStartTimeUs)) $self->setDriverStartTimeUs($driverStartTimeUs);
        if(!is_null($driverEndTimeUs)) $self->setDriverEndTimeUs($driverEndTimeUs);
        if(!is_null($osRenderQueueStartTimeUs)) $self->setOsRenderQueueStartTimeUs($osRenderQueueStartTimeUs);
        if(!is_null($osRenderQueueEndTimeUs)) $self->setOsRenderQueueEndTimeUs($osRenderQueueEndTimeUs);
        if(!is_null($gpuRenderStartTimeUs)) $self->setGpuRenderStartTimeUs($gpuRenderStartTimeUs);
        if(!is_null($gpuRenderEndTimeUs)) $self->setGpuRenderEndTimeUs($gpuRenderEndTimeUs);
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
     * uint64_t/
     */
    public function getPresentID(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentID(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->presentID = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getInputSampleTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->inputSampleTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInputSampleTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->inputSampleTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSimStartTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->simStartTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSimStartTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->simStartTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSimEndTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->simEndTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSimEndTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->simEndTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getRenderSubmitStartTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->renderSubmitStartTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRenderSubmitStartTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->renderSubmitStartTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getRenderSubmitEndTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->renderSubmitEndTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRenderSubmitEndTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->renderSubmitEndTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPresentStartTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentStartTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentStartTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->presentStartTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPresentEndTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentEndTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentEndTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->presentEndTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDriverStartTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->driverStartTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDriverStartTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->driverStartTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDriverEndTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->driverEndTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDriverEndTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->driverEndTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getOsRenderQueueStartTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->osRenderQueueStartTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOsRenderQueueStartTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->osRenderQueueStartTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getOsRenderQueueEndTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->osRenderQueueEndTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOsRenderQueueEndTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->osRenderQueueEndTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getGpuRenderStartTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gpuRenderStartTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGpuRenderStartTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gpuRenderStartTimeUs = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getGpuRenderEndTimeUs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gpuRenderEndTimeUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGpuRenderEndTimeUs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gpuRenderEndTimeUs = $cValue;
    }
}
