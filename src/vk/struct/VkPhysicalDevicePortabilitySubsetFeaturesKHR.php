<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevicePortabilitySubsetFeaturesKHR
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
        null|bool $constantAlphaColorBlendFactors = null,
        null|bool $events = null,
        null|bool $imageViewFormatReinterpretation = null,
        null|bool $imageViewFormatSwizzle = null,
        null|bool $imageView2DOn3DImage = null,
        null|bool $multisampleArrayImage = null,
        null|bool $mutableComparisonSamplers = null,
        null|bool $pointPolygons = null,
        null|bool $samplerMipLodBias = null,
        null|bool $separateStencilMaskRef = null,
        null|bool $shaderSampleRateInterpolationFunctions = null,
        null|bool $tessellationIsolines = null,
        null|bool $tessellationPointMode = null,
        null|bool $triangleFans = null,
        null|bool $vertexAttributeAccessBeyondStride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevicePortabilitySubsetFeaturesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($constantAlphaColorBlendFactors)) $self->setConstantAlphaColorBlendFactors($constantAlphaColorBlendFactors);
        if(!is_null($events)) $self->setEvents($events);
        if(!is_null($imageViewFormatReinterpretation)) $self->setImageViewFormatReinterpretation($imageViewFormatReinterpretation);
        if(!is_null($imageViewFormatSwizzle)) $self->setImageViewFormatSwizzle($imageViewFormatSwizzle);
        if(!is_null($imageView2DOn3DImage)) $self->setImageView2DOn3DImage($imageView2DOn3DImage);
        if(!is_null($multisampleArrayImage)) $self->setMultisampleArrayImage($multisampleArrayImage);
        if(!is_null($mutableComparisonSamplers)) $self->setMutableComparisonSamplers($mutableComparisonSamplers);
        if(!is_null($pointPolygons)) $self->setPointPolygons($pointPolygons);
        if(!is_null($samplerMipLodBias)) $self->setSamplerMipLodBias($samplerMipLodBias);
        if(!is_null($separateStencilMaskRef)) $self->setSeparateStencilMaskRef($separateStencilMaskRef);
        if(!is_null($shaderSampleRateInterpolationFunctions)) $self->setShaderSampleRateInterpolationFunctions($shaderSampleRateInterpolationFunctions);
        if(!is_null($tessellationIsolines)) $self->setTessellationIsolines($tessellationIsolines);
        if(!is_null($tessellationPointMode)) $self->setTessellationPointMode($tessellationPointMode);
        if(!is_null($triangleFans)) $self->setTriangleFans($triangleFans);
        if(!is_null($vertexAttributeAccessBeyondStride)) $self->setVertexAttributeAccessBeyondStride($vertexAttributeAccessBeyondStride);
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
     * uint32_t/
     */
    public function getConstantAlphaColorBlendFactors(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->constantAlphaColorBlendFactors;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setConstantAlphaColorBlendFactors(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->constantAlphaColorBlendFactors = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEvents(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->events;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setEvents(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->events = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageViewFormatReinterpretation(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageViewFormatReinterpretation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setImageViewFormatReinterpretation(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->imageViewFormatReinterpretation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageViewFormatSwizzle(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageViewFormatSwizzle;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setImageViewFormatSwizzle(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->imageViewFormatSwizzle = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageView2DOn3DImage(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageView2DOn3DImage;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setImageView2DOn3DImage(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->imageView2DOn3DImage = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMultisampleArrayImage(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->multisampleArrayImage;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultisampleArrayImage(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multisampleArrayImage = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMutableComparisonSamplers(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mutableComparisonSamplers;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMutableComparisonSamplers(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->mutableComparisonSamplers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPointPolygons(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pointPolygons;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPointPolygons(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->pointPolygons = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSamplerMipLodBias(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->samplerMipLodBias;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSamplerMipLodBias(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->samplerMipLodBias = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSeparateStencilMaskRef(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->separateStencilMaskRef;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSeparateStencilMaskRef(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->separateStencilMaskRef = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSampleRateInterpolationFunctions(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSampleRateInterpolationFunctions;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSampleRateInterpolationFunctions(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSampleRateInterpolationFunctions = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTessellationIsolines(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tessellationIsolines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTessellationIsolines(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->tessellationIsolines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTessellationPointMode(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tessellationPointMode;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTessellationPointMode(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->tessellationPointMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTriangleFans(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->triangleFans;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTriangleFans(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->triangleFans = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexAttributeAccessBeyondStride(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexAttributeAccessBeyondStride;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVertexAttributeAccessBeyondStride(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vertexAttributeAccessBeyondStride = $cValue;
    }
}
