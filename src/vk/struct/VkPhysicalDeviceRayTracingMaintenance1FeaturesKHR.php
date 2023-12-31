<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRayTracingMaintenance1FeaturesKHR
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
        null|bool $rayTracingMaintenance1 = null,
        null|bool $rayTracingPipelineTraceRaysIndirect2 = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRayTracingMaintenance1FeaturesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($rayTracingMaintenance1)) $self->setRayTracingMaintenance1($rayTracingMaintenance1);
        if(!is_null($rayTracingPipelineTraceRaysIndirect2)) $self->setRayTracingPipelineTraceRaysIndirect2($rayTracingPipelineTraceRaysIndirect2);
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
    public function getRayTracingMaintenance1(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rayTracingMaintenance1;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTracingMaintenance1(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTracingMaintenance1 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRayTracingPipelineTraceRaysIndirect2(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rayTracingPipelineTraceRaysIndirect2;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTracingPipelineTraceRaysIndirect2(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTracingPipelineTraceRaysIndirect2 = $cValue;
    }
}
