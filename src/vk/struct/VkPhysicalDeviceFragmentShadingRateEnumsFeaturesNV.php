<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFragmentShadingRateEnumsFeaturesNV
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
        null|bool $fragmentShadingRateEnums = null,
        null|bool $supersampleFragmentShadingRates = null,
        null|bool $noInvocationFragmentShadingRates = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFragmentShadingRateEnumsFeaturesNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($fragmentShadingRateEnums)) $self->setFragmentShadingRateEnums($fragmentShadingRateEnums);
        if(!is_null($supersampleFragmentShadingRates)) $self->setSupersampleFragmentShadingRates($supersampleFragmentShadingRates);
        if(!is_null($noInvocationFragmentShadingRates)) $self->setNoInvocationFragmentShadingRates($noInvocationFragmentShadingRates);
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
    public function getFragmentShadingRateEnums(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateEnums;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateEnums(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateEnums = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSupersampleFragmentShadingRates(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supersampleFragmentShadingRates;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSupersampleFragmentShadingRates(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->supersampleFragmentShadingRates = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNoInvocationFragmentShadingRates(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->noInvocationFragmentShadingRates;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setNoInvocationFragmentShadingRates(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->noInvocationFragmentShadingRates = $cValue;
    }
}
