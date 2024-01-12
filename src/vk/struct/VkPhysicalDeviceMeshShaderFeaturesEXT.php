<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMeshShaderFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "taskShader" => $this->getTaskShader(),
          "meshShader" => $this->getMeshShader(),
          "multiviewMeshShader" => $this->getMultiviewMeshShader(),
          "primitiveFragmentShadingRateMeshShader" => $this->getPrimitiveFragmentShadingRateMeshShader(),
          "meshShaderQueries" => $this->getMeshShaderQueries(),
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
        null|bool $taskShader = null,
        null|bool $meshShader = null,
        null|bool $multiviewMeshShader = null,
        null|bool $primitiveFragmentShadingRateMeshShader = null,
        null|bool $meshShaderQueries = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMeshShaderFeaturesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($taskShader)) $self->setTaskShader($taskShader);
        if(!is_null($meshShader)) $self->setMeshShader($meshShader);
        if(!is_null($multiviewMeshShader)) $self->setMultiviewMeshShader($multiviewMeshShader);
        if(!is_null($primitiveFragmentShadingRateMeshShader)) $self->setPrimitiveFragmentShadingRateMeshShader($primitiveFragmentShadingRateMeshShader);
        if(!is_null($meshShaderQueries)) $self->setMeshShaderQueries($meshShaderQueries);
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
    public function getTaskShader(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->taskShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTaskShader(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->taskShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMeshShader(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->meshShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMeshShader(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->meshShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMultiviewMeshShader(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->multiviewMeshShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultiviewMeshShader(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multiviewMeshShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrimitiveFragmentShadingRateMeshShader(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->primitiveFragmentShadingRateMeshShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitiveFragmentShadingRateMeshShader(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitiveFragmentShadingRateMeshShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMeshShaderQueries(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->meshShaderQueries;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMeshShaderQueries(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->meshShaderQueries = $cValue;
    }
}
