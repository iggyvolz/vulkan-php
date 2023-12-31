<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDeviceGeneratedCommandsComputeFeaturesNV
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
        null|bool $deviceGeneratedCompute = null,
        null|bool $deviceGeneratedComputePipelines = null,
        null|bool $deviceGeneratedComputeCaptureReplay = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDeviceGeneratedCommandsComputeFeaturesNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($deviceGeneratedCompute)) $self->setDeviceGeneratedCompute($deviceGeneratedCompute);
        if(!is_null($deviceGeneratedComputePipelines)) $self->setDeviceGeneratedComputePipelines($deviceGeneratedComputePipelines);
        if(!is_null($deviceGeneratedComputeCaptureReplay)) $self->setDeviceGeneratedComputeCaptureReplay($deviceGeneratedComputeCaptureReplay);
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
     * uint32_t/
     */
    public function getDeviceGeneratedCompute(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceGeneratedCompute;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceGeneratedCompute(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceGeneratedCompute = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceGeneratedComputePipelines(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceGeneratedComputePipelines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceGeneratedComputePipelines(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceGeneratedComputePipelines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceGeneratedComputeCaptureReplay(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceGeneratedComputeCaptureReplay;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceGeneratedComputeCaptureReplay(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceGeneratedComputeCaptureReplay = $cValue;
    }
}
