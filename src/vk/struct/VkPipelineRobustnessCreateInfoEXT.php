<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineRobustnessCreateInfoEXT
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
        null|\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $storageBuffers = null,
        null|\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $uniformBuffers = null,
        null|\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $vertexInputs = null,
        null|\iggyvolz\vulkan\enum\VkPipelineRobustnessImageBehaviorEXT $images = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineRobustnessCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($storageBuffers)) $self->setStorageBuffers($storageBuffers);
        if(!is_null($uniformBuffers)) $self->setUniformBuffers($uniformBuffers);
        if(!is_null($vertexInputs)) $self->setVertexInputs($vertexInputs);
        if(!is_null($images)) $self->setImages($images);
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
     * VkPipelineRobustnessBufferBehaviorEXT/
     */
    public function getStorageBuffers(): \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storageBuffers;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT::from($cValue);
        return $phpValue;
    }

    public function setStorageBuffers(\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->storageBuffers = $cValue;
    }

    /**
     * VkPipelineRobustnessBufferBehaviorEXT/
     */
    public function getUniformBuffers(): \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->uniformBuffers;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT::from($cValue);
        return $phpValue;
    }

    public function setUniformBuffers(\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->uniformBuffers = $cValue;
    }

    /**
     * VkPipelineRobustnessBufferBehaviorEXT/
     */
    public function getVertexInputs(): \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexInputs;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT::from($cValue);
        return $phpValue;
    }

    public function setVertexInputs(\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->vertexInputs = $cValue;
    }

    /**
     * VkPipelineRobustnessImageBehaviorEXT/
     */
    public function getImages(): \iggyvolz\vulkan\enum\VkPipelineRobustnessImageBehaviorEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->images;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineRobustnessImageBehaviorEXT::from($cValue);
        return $phpValue;
    }

    public function setImages(\iggyvolz\vulkan\enum\VkPipelineRobustnessImageBehaviorEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->images = $cValue;
    }
}
