<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRayTracingPipelinePropertiesKHR
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
        null|int $shaderGroupHandleSize = null,
        null|int $maxRayRecursionDepth = null,
        null|int $maxShaderGroupStride = null,
        null|int $shaderGroupBaseAlignment = null,
        null|int $shaderGroupHandleCaptureReplaySize = null,
        null|int $maxRayDispatchInvocationCount = null,
        null|int $shaderGroupHandleAlignment = null,
        null|int $maxRayHitAttributeSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRayTracingPipelinePropertiesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderGroupHandleSize)) $self->setShaderGroupHandleSize($shaderGroupHandleSize);
        if(!is_null($maxRayRecursionDepth)) $self->setMaxRayRecursionDepth($maxRayRecursionDepth);
        if(!is_null($maxShaderGroupStride)) $self->setMaxShaderGroupStride($maxShaderGroupStride);
        if(!is_null($shaderGroupBaseAlignment)) $self->setShaderGroupBaseAlignment($shaderGroupBaseAlignment);
        if(!is_null($shaderGroupHandleCaptureReplaySize)) $self->setShaderGroupHandleCaptureReplaySize($shaderGroupHandleCaptureReplaySize);
        if(!is_null($maxRayDispatchInvocationCount)) $self->setMaxRayDispatchInvocationCount($maxRayDispatchInvocationCount);
        if(!is_null($shaderGroupHandleAlignment)) $self->setShaderGroupHandleAlignment($shaderGroupHandleAlignment);
        if(!is_null($maxRayHitAttributeSize)) $self->setMaxRayHitAttributeSize($maxRayHitAttributeSize);
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
    public function getShaderGroupHandleSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderGroupHandleSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderGroupHandleSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shaderGroupHandleSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRayRecursionDepth(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxRayRecursionDepth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRayRecursionDepth(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxRayRecursionDepth = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxShaderGroupStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxShaderGroupStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxShaderGroupStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxShaderGroupStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderGroupBaseAlignment(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderGroupBaseAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderGroupBaseAlignment(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shaderGroupBaseAlignment = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderGroupHandleCaptureReplaySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderGroupHandleCaptureReplaySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderGroupHandleCaptureReplaySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shaderGroupHandleCaptureReplaySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRayDispatchInvocationCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxRayDispatchInvocationCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRayDispatchInvocationCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxRayDispatchInvocationCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderGroupHandleAlignment(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderGroupHandleAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderGroupHandleAlignment(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shaderGroupHandleAlignment = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRayHitAttributeSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxRayHitAttributeSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRayHitAttributeSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxRayHitAttributeSize = $cValue;
    }
}
