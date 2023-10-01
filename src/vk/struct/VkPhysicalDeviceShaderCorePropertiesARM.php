<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderCorePropertiesARM
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
        null|int $pixelRate = null,
        null|int $texelRate = null,
        null|int $fmaRate = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderCorePropertiesARM', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pixelRate)) $self->setPixelRate($pixelRate);
        if(!is_null($texelRate)) $self->setTexelRate($texelRate);
        if(!is_null($fmaRate)) $self->setFmaRate($fmaRate);
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
    public function getPixelRate(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pixelRate;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPixelRate(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pixelRate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTexelRate(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->texelRate;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTexelRate(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->texelRate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFmaRate(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fmaRate;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFmaRate(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->fmaRate = $cValue;
    }
}
