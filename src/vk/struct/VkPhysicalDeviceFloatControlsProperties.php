<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFloatControlsProperties
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
        null|\iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence $denormBehaviorIndependence = null,
        null|\iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence $roundingModeIndependence = null,
        null|bool $shaderSignedZeroInfNanPreserveFloat16 = null,
        null|bool $shaderSignedZeroInfNanPreserveFloat32 = null,
        null|bool $shaderSignedZeroInfNanPreserveFloat64 = null,
        null|bool $shaderDenormPreserveFloat16 = null,
        null|bool $shaderDenormPreserveFloat32 = null,
        null|bool $shaderDenormPreserveFloat64 = null,
        null|bool $shaderDenormFlushToZeroFloat16 = null,
        null|bool $shaderDenormFlushToZeroFloat32 = null,
        null|bool $shaderDenormFlushToZeroFloat64 = null,
        null|bool $shaderRoundingModeRTEFloat16 = null,
        null|bool $shaderRoundingModeRTEFloat32 = null,
        null|bool $shaderRoundingModeRTEFloat64 = null,
        null|bool $shaderRoundingModeRTZFloat16 = null,
        null|bool $shaderRoundingModeRTZFloat32 = null,
        null|bool $shaderRoundingModeRTZFloat64 = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFloatControlsProperties', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($denormBehaviorIndependence)) $self->setDenormBehaviorIndependence($denormBehaviorIndependence);
        if(!is_null($roundingModeIndependence)) $self->setRoundingModeIndependence($roundingModeIndependence);
        if(!is_null($shaderSignedZeroInfNanPreserveFloat16)) $self->setShaderSignedZeroInfNanPreserveFloat16($shaderSignedZeroInfNanPreserveFloat16);
        if(!is_null($shaderSignedZeroInfNanPreserveFloat32)) $self->setShaderSignedZeroInfNanPreserveFloat32($shaderSignedZeroInfNanPreserveFloat32);
        if(!is_null($shaderSignedZeroInfNanPreserveFloat64)) $self->setShaderSignedZeroInfNanPreserveFloat64($shaderSignedZeroInfNanPreserveFloat64);
        if(!is_null($shaderDenormPreserveFloat16)) $self->setShaderDenormPreserveFloat16($shaderDenormPreserveFloat16);
        if(!is_null($shaderDenormPreserveFloat32)) $self->setShaderDenormPreserveFloat32($shaderDenormPreserveFloat32);
        if(!is_null($shaderDenormPreserveFloat64)) $self->setShaderDenormPreserveFloat64($shaderDenormPreserveFloat64);
        if(!is_null($shaderDenormFlushToZeroFloat16)) $self->setShaderDenormFlushToZeroFloat16($shaderDenormFlushToZeroFloat16);
        if(!is_null($shaderDenormFlushToZeroFloat32)) $self->setShaderDenormFlushToZeroFloat32($shaderDenormFlushToZeroFloat32);
        if(!is_null($shaderDenormFlushToZeroFloat64)) $self->setShaderDenormFlushToZeroFloat64($shaderDenormFlushToZeroFloat64);
        if(!is_null($shaderRoundingModeRTEFloat16)) $self->setShaderRoundingModeRTEFloat16($shaderRoundingModeRTEFloat16);
        if(!is_null($shaderRoundingModeRTEFloat32)) $self->setShaderRoundingModeRTEFloat32($shaderRoundingModeRTEFloat32);
        if(!is_null($shaderRoundingModeRTEFloat64)) $self->setShaderRoundingModeRTEFloat64($shaderRoundingModeRTEFloat64);
        if(!is_null($shaderRoundingModeRTZFloat16)) $self->setShaderRoundingModeRTZFloat16($shaderRoundingModeRTZFloat16);
        if(!is_null($shaderRoundingModeRTZFloat32)) $self->setShaderRoundingModeRTZFloat32($shaderRoundingModeRTZFloat32);
        if(!is_null($shaderRoundingModeRTZFloat64)) $self->setShaderRoundingModeRTZFloat64($shaderRoundingModeRTZFloat64);
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
     * VkShaderFloatControlsIndependence/
     */
    public function getDenormBehaviorIndependence(): \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->denormBehaviorIndependence;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence::from($cValue);
        return $phpValue;
    }

    public function setDenormBehaviorIndependence(
        \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence $phpValue,
    ): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->denormBehaviorIndependence = $cValue;
    }

    /**
     * VkShaderFloatControlsIndependence/
     */
    public function getRoundingModeIndependence(): \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->roundingModeIndependence;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence::from($cValue);
        return $phpValue;
    }

    public function setRoundingModeIndependence(
        \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence $phpValue,
    ): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->roundingModeIndependence = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSignedZeroInfNanPreserveFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSignedZeroInfNanPreserveFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSignedZeroInfNanPreserveFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSignedZeroInfNanPreserveFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSignedZeroInfNanPreserveFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSignedZeroInfNanPreserveFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSignedZeroInfNanPreserveFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSignedZeroInfNanPreserveFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSignedZeroInfNanPreserveFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSignedZeroInfNanPreserveFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSignedZeroInfNanPreserveFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSignedZeroInfNanPreserveFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormPreserveFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormPreserveFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormPreserveFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormPreserveFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormPreserveFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormPreserveFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormPreserveFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormPreserveFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormPreserveFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormPreserveFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormPreserveFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormPreserveFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormFlushToZeroFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormFlushToZeroFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormFlushToZeroFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormFlushToZeroFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormFlushToZeroFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormFlushToZeroFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormFlushToZeroFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormFlushToZeroFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormFlushToZeroFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormFlushToZeroFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormFlushToZeroFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormFlushToZeroFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTEFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTEFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTEFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTEFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTEFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTEFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTEFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTEFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTEFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTEFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTEFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTEFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTZFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTZFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTZFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTZFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTZFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTZFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTZFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTZFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTZFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTZFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTZFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTZFloat64 = $cValue;
    }
}
