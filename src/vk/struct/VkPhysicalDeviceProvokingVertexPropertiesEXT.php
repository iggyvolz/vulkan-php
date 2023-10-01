<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceProvokingVertexPropertiesEXT
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
        null|bool $provokingVertexModePerPipeline = null,
        null|bool $transformFeedbackPreservesTriangleFanProvokingVertex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceProvokingVertexPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($provokingVertexModePerPipeline)) $self->setProvokingVertexModePerPipeline($provokingVertexModePerPipeline);
        if(!is_null($transformFeedbackPreservesTriangleFanProvokingVertex)) $self->setTransformFeedbackPreservesTriangleFanProvokingVertex($transformFeedbackPreservesTriangleFanProvokingVertex);
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
     * uint32_t/
     */
    public function getProvokingVertexModePerPipeline(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->provokingVertexModePerPipeline;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setProvokingVertexModePerPipeline(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->provokingVertexModePerPipeline = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTransformFeedbackPreservesTriangleFanProvokingVertex(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->transformFeedbackPreservesTriangleFanProvokingVertex;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTransformFeedbackPreservesTriangleFanProvokingVertex(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->transformFeedbackPreservesTriangleFanProvokingVertex = $cValue;
    }
}
