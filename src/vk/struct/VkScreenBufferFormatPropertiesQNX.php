<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkScreenBufferFormatPropertiesQNX implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "format" => $this->getFormat(),
          "externalFormat" => $this->getExternalFormat(),
          "screenUsage" => $this->getScreenUsage(),
          "formatFeatures" => $this->getFormatFeatures(),
          "samplerYcbcrConversionComponents" => $this->getSamplerYcbcrConversionComponents(),
          "suggestedYcbcrModel" => $this->getSuggestedYcbcrModel(),
          "suggestedYcbcrRange" => $this->getSuggestedYcbcrRange(),
          "suggestedXChromaOffset" => $this->getSuggestedXChromaOffset(),
          "suggestedYChromaOffset" => $this->getSuggestedYChromaOffset(),
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
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|int $externalFormat = null,
        null|int $screenUsage = null,
        null|array $formatFeatures = null,
        null|VkComponentMapping $samplerYcbcrConversionComponents = null,
        null|\iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion $suggestedYcbcrModel = null,
        null|\iggyvolz\vulkan\enum\VkSamplerYcbcrRange $suggestedYcbcrRange = null,
        null|\iggyvolz\vulkan\enum\VkChromaLocation $suggestedXChromaOffset = null,
        null|\iggyvolz\vulkan\enum\VkChromaLocation $suggestedYChromaOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkScreenBufferFormatPropertiesQNX', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($externalFormat)) $self->setExternalFormat($externalFormat);
        if(!is_null($screenUsage)) $self->setScreenUsage($screenUsage);
        if(!is_null($formatFeatures)) $self->setFormatFeatures($formatFeatures);
        if(!is_null($samplerYcbcrConversionComponents)) $self->setSamplerYcbcrConversionComponents($samplerYcbcrConversionComponents);
        if(!is_null($suggestedYcbcrModel)) $self->setSuggestedYcbcrModel($suggestedYcbcrModel);
        if(!is_null($suggestedYcbcrRange)) $self->setSuggestedYcbcrRange($suggestedYcbcrRange);
        if(!is_null($suggestedXChromaOffset)) $self->setSuggestedXChromaOffset($suggestedXChromaOffset);
        if(!is_null($suggestedYChromaOffset)) $self->setSuggestedYChromaOffset($suggestedYChromaOffset);
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
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getExternalFormat(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->externalFormat;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setExternalFormat(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->externalFormat = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getScreenUsage(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->screenUsage;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setScreenUsage(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->screenUsage = $cValue;
    }

    /**
     * VkFormatFeatureFlags/
     */
    public function getFormatFeatures(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->formatFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFormatFeatures(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->formatFeatures = $cValue;
    }

    /**
     * VkComponentMapping/
     */
    public function getSamplerYcbcrConversionComponents(): VkComponentMapping
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->samplerYcbcrConversionComponents;
        $phpValue = new \iggyvolz\vulkan\struct\VkComponentMapping($cValue, $ffi);
        return $phpValue;
    }

    public function setSamplerYcbcrConversionComponents(VkComponentMapping $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->samplerYcbcrConversionComponents = $cValue;
    }

    /**
     * VkSamplerYcbcrModelConversion/
     */
    public function getSuggestedYcbcrModel(): \iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->suggestedYcbcrModel;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion::from($cValue);
        return $phpValue;
    }

    public function setSuggestedYcbcrModel(\iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->suggestedYcbcrModel = $cValue;
    }

    /**
     * VkSamplerYcbcrRange/
     */
    public function getSuggestedYcbcrRange(): \iggyvolz\vulkan\enum\VkSamplerYcbcrRange
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->suggestedYcbcrRange;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerYcbcrRange::from($cValue);
        return $phpValue;
    }

    public function setSuggestedYcbcrRange(\iggyvolz\vulkan\enum\VkSamplerYcbcrRange $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->suggestedYcbcrRange = $cValue;
    }

    /**
     * VkChromaLocation/
     */
    public function getSuggestedXChromaOffset(): \iggyvolz\vulkan\enum\VkChromaLocation
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->suggestedXChromaOffset;
        $phpValue = \iggyvolz\vulkan\enum\VkChromaLocation::from($cValue);
        return $phpValue;
    }

    public function setSuggestedXChromaOffset(\iggyvolz\vulkan\enum\VkChromaLocation $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->suggestedXChromaOffset = $cValue;
    }

    /**
     * VkChromaLocation/
     */
    public function getSuggestedYChromaOffset(): \iggyvolz\vulkan\enum\VkChromaLocation
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->suggestedYChromaOffset;
        $phpValue = \iggyvolz\vulkan\enum\VkChromaLocation::from($cValue);
        return $phpValue;
    }

    public function setSuggestedYChromaOffset(\iggyvolz\vulkan\enum\VkChromaLocation $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->suggestedYChromaOffset = $cValue;
    }
}
