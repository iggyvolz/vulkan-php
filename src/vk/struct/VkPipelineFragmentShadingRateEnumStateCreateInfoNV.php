<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineFragmentShadingRateEnumStateCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shadingRateType" => $this->getShadingRateType(),
          "shadingRate" => $this->getShadingRate(),
          "combinerOps" => $this->getCombinerOps(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
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
        $self = new self( $vulkan->ffi->new('VkPipelineFragmentShadingRateEnumStateCreateInfoNV', false));
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
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkFragmentShadingRateTypeNV/
     */
    public function getShadingRateType(): \iggyvolz\vulkan\enum\VkFragmentShadingRateTypeNV
    {
        $cValue = $this->cdata->shadingRateType;
        $phpValue = \iggyvolz\vulkan\enum\VkFragmentShadingRateTypeNV::from($cValue);
        return $phpValue;
    }

    public function setShadingRateType(\iggyvolz\vulkan\enum\VkFragmentShadingRateTypeNV $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->shadingRateType = $cValue;
    }

    /**
     * VkFragmentShadingRateNV/
     */
    public function getShadingRate(): \iggyvolz\vulkan\enum\VkFragmentShadingRateNV
    {
        $cValue = $this->cdata->shadingRate;
        $phpValue = \iggyvolz\vulkan\enum\VkFragmentShadingRateNV::from($cValue);
        return $phpValue;
    }

    public function setShadingRate(\iggyvolz\vulkan\enum\VkFragmentShadingRateNV $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->shadingRate = $cValue;
    }

    /**
     * void* /
     */
    public function getCombinerOps(): mixed
    {
        $cValue = $this->cdata->combinerOps;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setCombinerOps(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->combinerOps = $cValue;
    }
}
