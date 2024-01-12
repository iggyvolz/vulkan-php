<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRayTracingMotionBlurFeaturesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "rayTracingMotionBlur" => $this->getRayTracingMotionBlur(),
          "rayTracingMotionBlurPipelineTraceRaysIndirect" => $this->getRayTracingMotionBlurPipelineTraceRaysIndirect(),
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
        null|bool $rayTracingMotionBlur = null,
        null|bool $rayTracingMotionBlurPipelineTraceRaysIndirect = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRayTracingMotionBlurFeaturesNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($rayTracingMotionBlur)) $self->setRayTracingMotionBlur($rayTracingMotionBlur);
        if(!is_null($rayTracingMotionBlurPipelineTraceRaysIndirect)) $self->setRayTracingMotionBlurPipelineTraceRaysIndirect($rayTracingMotionBlurPipelineTraceRaysIndirect);
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
     * uint32_t/
     */
    public function getRayTracingMotionBlur(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->rayTracingMotionBlur;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTracingMotionBlur(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTracingMotionBlur = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRayTracingMotionBlurPipelineTraceRaysIndirect(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->rayTracingMotionBlurPipelineTraceRaysIndirect;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTracingMotionBlurPipelineTraceRaysIndirect(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTracingMotionBlurPipelineTraceRaysIndirect = $cValue;
    }
}
