<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSamplerYcbcrConversionCreateInfo
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
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|\iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion $ycbcrModel = null,
        null|\iggyvolz\vulkan\enum\VkSamplerYcbcrRange $ycbcrRange = null,
        null|VkComponentMapping $components = null,
        null|\iggyvolz\vulkan\enum\VkChromaLocation $xChromaOffset = null,
        null|\iggyvolz\vulkan\enum\VkChromaLocation $yChromaOffset = null,
        null|\iggyvolz\vulkan\enum\VkFilter $chromaFilter = null,
        null|bool $forceExplicitReconstruction = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSamplerYcbcrConversionCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($ycbcrModel)) $self->setYcbcrModel($ycbcrModel);
        if(!is_null($ycbcrRange)) $self->setYcbcrRange($ycbcrRange);
        if(!is_null($components)) $self->setComponents($components);
        if(!is_null($xChromaOffset)) $self->setXChromaOffset($xChromaOffset);
        if(!is_null($yChromaOffset)) $self->setYChromaOffset($yChromaOffset);
        if(!is_null($chromaFilter)) $self->setChromaFilter($chromaFilter);
        if(!is_null($forceExplicitReconstruction)) $self->setForceExplicitReconstruction($forceExplicitReconstruction);
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
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * VkSamplerYcbcrModelConversion/
     */
    public function getYcbcrModel(): \iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->ycbcrModel;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion::from($cValue);
        return $phpValue;
    }

    public function setYcbcrModel(\iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->ycbcrModel = $cValue;
    }

    /**
     * VkSamplerYcbcrRange/
     */
    public function getYcbcrRange(): \iggyvolz\vulkan\enum\VkSamplerYcbcrRange
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->ycbcrRange;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerYcbcrRange::from($cValue);
        return $phpValue;
    }

    public function setYcbcrRange(\iggyvolz\vulkan\enum\VkSamplerYcbcrRange $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->ycbcrRange = $cValue;
    }

    /**
     * VkComponentMapping/
     */
    public function getComponents(): VkComponentMapping
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->components;
        $phpValue = new \iggyvolz\vulkan\struct\VkComponentMapping($cValue, $ffi);
        return $phpValue;
    }

    public function setComponents(VkComponentMapping $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->components = $cValue;
    }

    /**
     * VkChromaLocation/
     */
    public function getXChromaOffset(): \iggyvolz\vulkan\enum\VkChromaLocation
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->xChromaOffset;
        $phpValue = \iggyvolz\vulkan\enum\VkChromaLocation::from($cValue);
        return $phpValue;
    }

    public function setXChromaOffset(\iggyvolz\vulkan\enum\VkChromaLocation $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->xChromaOffset = $cValue;
    }

    /**
     * VkChromaLocation/
     */
    public function getYChromaOffset(): \iggyvolz\vulkan\enum\VkChromaLocation
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->yChromaOffset;
        $phpValue = \iggyvolz\vulkan\enum\VkChromaLocation::from($cValue);
        return $phpValue;
    }

    public function setYChromaOffset(\iggyvolz\vulkan\enum\VkChromaLocation $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->yChromaOffset = $cValue;
    }

    /**
     * VkFilter/
     */
    public function getChromaFilter(): \iggyvolz\vulkan\enum\VkFilter
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->chromaFilter;
        $phpValue = \iggyvolz\vulkan\enum\VkFilter::from($cValue);
        return $phpValue;
    }

    public function setChromaFilter(\iggyvolz\vulkan\enum\VkFilter $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->chromaFilter = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getForceExplicitReconstruction(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->forceExplicitReconstruction;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setForceExplicitReconstruction(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->forceExplicitReconstruction = $cValue;
    }
}
