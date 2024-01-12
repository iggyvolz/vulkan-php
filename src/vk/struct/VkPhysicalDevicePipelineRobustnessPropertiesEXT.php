<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevicePipelineRobustnessPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "defaultRobustnessStorageBuffers" => $this->getDefaultRobustnessStorageBuffers(),
          "defaultRobustnessUniformBuffers" => $this->getDefaultRobustnessUniformBuffers(),
          "defaultRobustnessVertexInputs" => $this->getDefaultRobustnessVertexInputs(),
          "defaultRobustnessImages" => $this->getDefaultRobustnessImages(),
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
        null|\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $defaultRobustnessStorageBuffers = null,
        null|\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $defaultRobustnessUniformBuffers = null,
        null|\iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $defaultRobustnessVertexInputs = null,
        null|\iggyvolz\vulkan\enum\VkPipelineRobustnessImageBehaviorEXT $defaultRobustnessImages = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevicePipelineRobustnessPropertiesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($defaultRobustnessStorageBuffers)) $self->setDefaultRobustnessStorageBuffers($defaultRobustnessStorageBuffers);
        if(!is_null($defaultRobustnessUniformBuffers)) $self->setDefaultRobustnessUniformBuffers($defaultRobustnessUniformBuffers);
        if(!is_null($defaultRobustnessVertexInputs)) $self->setDefaultRobustnessVertexInputs($defaultRobustnessVertexInputs);
        if(!is_null($defaultRobustnessImages)) $self->setDefaultRobustnessImages($defaultRobustnessImages);
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
     * VkPipelineRobustnessBufferBehaviorEXT/
     */
    public function getDefaultRobustnessStorageBuffers(): \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->defaultRobustnessStorageBuffers;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT::from($cValue);
        return $phpValue;
    }

    public function setDefaultRobustnessStorageBuffers(
        \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $phpValue,
    ): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->defaultRobustnessStorageBuffers = $cValue;
    }

    /**
     * VkPipelineRobustnessBufferBehaviorEXT/
     */
    public function getDefaultRobustnessUniformBuffers(): \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->defaultRobustnessUniformBuffers;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT::from($cValue);
        return $phpValue;
    }

    public function setDefaultRobustnessUniformBuffers(
        \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $phpValue,
    ): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->defaultRobustnessUniformBuffers = $cValue;
    }

    /**
     * VkPipelineRobustnessBufferBehaviorEXT/
     */
    public function getDefaultRobustnessVertexInputs(): \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->defaultRobustnessVertexInputs;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT::from($cValue);
        return $phpValue;
    }

    public function setDefaultRobustnessVertexInputs(
        \iggyvolz\vulkan\enum\VkPipelineRobustnessBufferBehaviorEXT $phpValue,
    ): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->defaultRobustnessVertexInputs = $cValue;
    }

    /**
     * VkPipelineRobustnessImageBehaviorEXT/
     */
    public function getDefaultRobustnessImages(): \iggyvolz\vulkan\enum\VkPipelineRobustnessImageBehaviorEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->defaultRobustnessImages;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineRobustnessImageBehaviorEXT::from($cValue);
        return $phpValue;
    }

    public function setDefaultRobustnessImages(
        \iggyvolz\vulkan\enum\VkPipelineRobustnessImageBehaviorEXT $phpValue,
    ): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->defaultRobustnessImages = $cValue;
    }
}
