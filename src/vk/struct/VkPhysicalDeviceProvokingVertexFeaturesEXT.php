<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceProvokingVertexFeaturesEXT
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
        null|bool $provokingVertexLast = null,
        null|bool $transformFeedbackPreservesProvokingVertex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceProvokingVertexFeaturesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($provokingVertexLast)) $self->setProvokingVertexLast($provokingVertexLast);
        if(!is_null($transformFeedbackPreservesProvokingVertex)) $self->setTransformFeedbackPreservesProvokingVertex($transformFeedbackPreservesProvokingVertex);
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
    public function getProvokingVertexLast(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->provokingVertexLast;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setProvokingVertexLast(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->provokingVertexLast = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTransformFeedbackPreservesProvokingVertex(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->transformFeedbackPreservesProvokingVertex;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTransformFeedbackPreservesProvokingVertex(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->transformFeedbackPreservesProvokingVertex = $cValue;
    }
}
