<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineFragmentShadingRateEnumStateCreateInfoNV
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
        null|\iggyvolz\vulkan\enum\VkFragmentShadingRateTypeNV $shadingRateType = null,
        null|\iggyvolz\vulkan\enum\VkFragmentShadingRateNV $shadingRate = null,
        mixed $combinerOps = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineFragmentShadingRateEnumStateCreateInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shadingRateType)) $self->setShadingRateType($shadingRateType);
        if(!is_null($shadingRate)) $self->setShadingRate($shadingRate);
        if(!is_null($combinerOps)) $self->setCombinerOps($combinerOps);
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
     * VkFragmentShadingRateTypeNV/
     */
    public function getShadingRateType(): \iggyvolz\vulkan\enum\VkFragmentShadingRateTypeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shadingRateType;
        $phpValue = \iggyvolz\vulkan\enum\VkFragmentShadingRateTypeNV::from($cValue);
        return $phpValue;
    }

    public function setShadingRateType(\iggyvolz\vulkan\enum\VkFragmentShadingRateTypeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->shadingRateType = $cValue;
    }

    /**
     * VkFragmentShadingRateNV/
     */
    public function getShadingRate(): \iggyvolz\vulkan\enum\VkFragmentShadingRateNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shadingRate;
        $phpValue = \iggyvolz\vulkan\enum\VkFragmentShadingRateNV::from($cValue);
        return $phpValue;
    }

    public function setShadingRate(\iggyvolz\vulkan\enum\VkFragmentShadingRateNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->shadingRate = $cValue;
    }

    /**
     * void* /
     */
    public function getCombinerOps(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->combinerOps;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setCombinerOps(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->combinerOps = $cValue;
    }
}
