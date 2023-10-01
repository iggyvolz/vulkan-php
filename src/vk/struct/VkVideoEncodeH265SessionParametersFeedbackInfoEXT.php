<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH265SessionParametersFeedbackInfoEXT
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
        null|bool $hasStdVPSOverrides = null,
        null|bool $hasStdSPSOverrides = null,
        null|bool $hasStdPPSOverrides = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH265SessionParametersFeedbackInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($hasStdVPSOverrides)) $self->setHasStdVPSOverrides($hasStdVPSOverrides);
        if(!is_null($hasStdSPSOverrides)) $self->setHasStdSPSOverrides($hasStdSPSOverrides);
        if(!is_null($hasStdPPSOverrides)) $self->setHasStdPPSOverrides($hasStdPPSOverrides);
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
    public function getHasStdVPSOverrides(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->hasStdVPSOverrides;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setHasStdVPSOverrides(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->hasStdVPSOverrides = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHasStdSPSOverrides(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->hasStdSPSOverrides;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setHasStdSPSOverrides(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->hasStdSPSOverrides = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHasStdPPSOverrides(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->hasStdPPSOverrides;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setHasStdPPSOverrides(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->hasStdPPSOverrides = $cValue;
    }
}
