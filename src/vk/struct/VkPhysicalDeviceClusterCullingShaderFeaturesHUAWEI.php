<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceClusterCullingShaderFeaturesHUAWEI
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
        null|bool $clustercullingShader = null,
        null|bool $multiviewClusterCullingShader = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceClusterCullingShaderFeaturesHUAWEI', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($clustercullingShader)) $self->setClustercullingShader($clustercullingShader);
        if(!is_null($multiviewClusterCullingShader)) $self->setMultiviewClusterCullingShader($multiviewClusterCullingShader);
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
    public function getClustercullingShader(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->clustercullingShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setClustercullingShader(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->clustercullingShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMultiviewClusterCullingShader(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->multiviewClusterCullingShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultiviewClusterCullingShader(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multiviewClusterCullingShader = $cValue;
    }
}
