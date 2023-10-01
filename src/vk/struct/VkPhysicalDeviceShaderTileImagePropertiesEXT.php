<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderTileImagePropertiesEXT
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
        null|bool $shaderTileImageCoherentReadAccelerated = null,
        null|bool $shaderTileImageReadSampleFromPixelRateInvocation = null,
        null|bool $shaderTileImageReadFromHelperInvocation = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderTileImagePropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderTileImageCoherentReadAccelerated)) $self->setShaderTileImageCoherentReadAccelerated($shaderTileImageCoherentReadAccelerated);
        if(!is_null($shaderTileImageReadSampleFromPixelRateInvocation)) $self->setShaderTileImageReadSampleFromPixelRateInvocation($shaderTileImageReadSampleFromPixelRateInvocation);
        if(!is_null($shaderTileImageReadFromHelperInvocation)) $self->setShaderTileImageReadFromHelperInvocation($shaderTileImageReadFromHelperInvocation);
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
    public function getShaderTileImageCoherentReadAccelerated(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderTileImageCoherentReadAccelerated;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderTileImageCoherentReadAccelerated(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderTileImageCoherentReadAccelerated = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderTileImageReadSampleFromPixelRateInvocation(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderTileImageReadSampleFromPixelRateInvocation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderTileImageReadSampleFromPixelRateInvocation(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderTileImageReadSampleFromPixelRateInvocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderTileImageReadFromHelperInvocation(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderTileImageReadFromHelperInvocation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderTileImageReadFromHelperInvocation(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderTileImageReadFromHelperInvocation = $cValue;
    }
}
