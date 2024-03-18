<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRayTracingPipelineFeaturesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "rayTracingPipeline" => $this->getRayTracingPipeline(),
          "rayTracingPipelineShaderGroupHandleCaptureReplay" => $this->getRayTracingPipelineShaderGroupHandleCaptureReplay(),
          "rayTracingPipelineShaderGroupHandleCaptureReplayMixed" => $this->getRayTracingPipelineShaderGroupHandleCaptureReplayMixed(),
          "rayTracingPipelineTraceRaysIndirect" => $this->getRayTracingPipelineTraceRaysIndirect(),
          "rayTraversalPrimitiveCulling" => $this->getRayTraversalPrimitiveCulling(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $rayTracingPipeline = null,
        null|bool $rayTracingPipelineShaderGroupHandleCaptureReplay = null,
        null|bool $rayTracingPipelineShaderGroupHandleCaptureReplayMixed = null,
        null|bool $rayTracingPipelineTraceRaysIndirect = null,
        null|bool $rayTraversalPrimitiveCulling = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRayTracingPipelineFeaturesKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($rayTracingPipeline)) $self->setRayTracingPipeline($rayTracingPipeline);
        if(!is_null($rayTracingPipelineShaderGroupHandleCaptureReplay)) $self->setRayTracingPipelineShaderGroupHandleCaptureReplay($rayTracingPipelineShaderGroupHandleCaptureReplay);
        if(!is_null($rayTracingPipelineShaderGroupHandleCaptureReplayMixed)) $self->setRayTracingPipelineShaderGroupHandleCaptureReplayMixed($rayTracingPipelineShaderGroupHandleCaptureReplayMixed);
        if(!is_null($rayTracingPipelineTraceRaysIndirect)) $self->setRayTracingPipelineTraceRaysIndirect($rayTracingPipelineTraceRaysIndirect);
        if(!is_null($rayTraversalPrimitiveCulling)) $self->setRayTraversalPrimitiveCulling($rayTraversalPrimitiveCulling);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRayTracingPipeline(): bool
    {
        $cValue = $this->cdata->rayTracingPipeline;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTracingPipeline(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTracingPipeline = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRayTracingPipelineShaderGroupHandleCaptureReplay(): bool
    {
        $cValue = $this->cdata->rayTracingPipelineShaderGroupHandleCaptureReplay;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTracingPipelineShaderGroupHandleCaptureReplay(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTracingPipelineShaderGroupHandleCaptureReplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRayTracingPipelineShaderGroupHandleCaptureReplayMixed(): bool
    {
        $cValue = $this->cdata->rayTracingPipelineShaderGroupHandleCaptureReplayMixed;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTracingPipelineShaderGroupHandleCaptureReplayMixed(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTracingPipelineShaderGroupHandleCaptureReplayMixed = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRayTracingPipelineTraceRaysIndirect(): bool
    {
        $cValue = $this->cdata->rayTracingPipelineTraceRaysIndirect;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTracingPipelineTraceRaysIndirect(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTracingPipelineTraceRaysIndirect = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRayTraversalPrimitiveCulling(): bool
    {
        $cValue = $this->cdata->rayTraversalPrimitiveCulling;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRayTraversalPrimitiveCulling(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rayTraversalPrimitiveCulling = $cValue;
    }
}
