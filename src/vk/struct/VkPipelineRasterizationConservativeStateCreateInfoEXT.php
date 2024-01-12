<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineRasterizationConservativeStateCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "conservativeRasterizationMode" => $this->getConservativeRasterizationMode(),
          "extraPrimitiveOverestimationSize" => $this->getExtraPrimitiveOverestimationSize(),
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
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT $conservativeRasterizationMode = null,
        null|float $extraPrimitiveOverestimationSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineRasterizationConservativeStateCreateInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($conservativeRasterizationMode)) $self->setConservativeRasterizationMode($conservativeRasterizationMode);
        if(!is_null($extraPrimitiveOverestimationSize)) $self->setExtraPrimitiveOverestimationSize($extraPrimitiveOverestimationSize);
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
     * VkPipelineRasterizationConservativeStateCreateFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkConservativeRasterizationModeEXT/
     */
    public function getConservativeRasterizationMode(): \iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->conservativeRasterizationMode;
        $phpValue = \iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT::from($cValue);
        return $phpValue;
    }

    public function setConservativeRasterizationMode(
        \iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT $phpValue,
    ): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->conservativeRasterizationMode = $cValue;
    }

    /**
     * float/
     */
    public function getExtraPrimitiveOverestimationSize(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->extraPrimitiveOverestimationSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setExtraPrimitiveOverestimationSize(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->extraPrimitiveOverestimationSize = $cValue;
    }
}
