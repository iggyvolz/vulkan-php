<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferCollectionPropertiesFUCHSIA implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "memoryTypeBits" => $this->getMemoryTypeBits(),
          "bufferCount" => $this->getBufferCount(),
          "createInfoIndex" => $this->getCreateInfoIndex(),
          "sysmemPixelFormat" => $this->getSysmemPixelFormat(),
          "formatFeatures" => $this->getFormatFeatures(),
          "sysmemColorSpaceIndex" => $this->getSysmemColorSpaceIndex(),
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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $memoryTypeBits = null,
        null|int $bufferCount = null,
        null|int $createInfoIndex = null,
        null|int $sysmemPixelFormat = null,
        null|array $formatFeatures = null,
        mixed $sysmemColorSpaceIndex = null,
        null|VkComponentMapping $samplerYcbcrConversionComponents = null,
        null|\iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion $suggestedYcbcrModel = null,
        null|\iggyvolz\vulkan\enum\VkSamplerYcbcrRange $suggestedYcbcrRange = null,
        null|\iggyvolz\vulkan\enum\VkChromaLocation $suggestedXChromaOffset = null,
        null|\iggyvolz\vulkan\enum\VkChromaLocation $suggestedYChromaOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferCollectionPropertiesFUCHSIA', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($memoryTypeBits)) $self->setMemoryTypeBits($memoryTypeBits);
        if(!is_null($bufferCount)) $self->setBufferCount($bufferCount);
        if(!is_null($createInfoIndex)) $self->setCreateInfoIndex($createInfoIndex);
        if(!is_null($sysmemPixelFormat)) $self->setSysmemPixelFormat($sysmemPixelFormat);
        if(!is_null($formatFeatures)) $self->setFormatFeatures($formatFeatures);
        if(!is_null($sysmemColorSpaceIndex)) $self->setSysmemColorSpaceIndex($sysmemColorSpaceIndex);
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
     * uint32_t/
     */
    public function getMemoryTypeBits(): int
    {
        $cValue = $this->cdata->memoryTypeBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryTypeBits(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->memoryTypeBits = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferCount(): int
    {
        $cValue = $this->cdata->bufferCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bufferCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCreateInfoIndex(): int
    {
        $cValue = $this->cdata->createInfoIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCreateInfoIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->createInfoIndex = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSysmemPixelFormat(): int
    {
        $cValue = $this->cdata->sysmemPixelFormat;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSysmemPixelFormat(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->sysmemPixelFormat = $cValue;
    }

    /**
     * VkFormatFeatureFlags/
     */
    public function getFormatFeatures(): array
    {
        $cValue = $this->cdata->formatFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFormatFeatures(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->formatFeatures = $cValue;
    }

    /**
     * void* /
     */
    public function getSysmemColorSpaceIndex(): mixed
    {
        $cValue = $this->cdata->sysmemColorSpaceIndex;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSysmemColorSpaceIndex(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->sysmemColorSpaceIndex = $cValue;
    }

    /**
     * VkComponentMapping/
     */
    public function getSamplerYcbcrConversionComponents(): VkComponentMapping
    {
        $cValue = $this->cdata->samplerYcbcrConversionComponents;
        $phpValue = new \iggyvolz\vulkan\struct\VkComponentMapping($cValue, $ffi);
        return $phpValue;
    }

    public function setSamplerYcbcrConversionComponents(VkComponentMapping $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->samplerYcbcrConversionComponents = $cValue;
    }

    /**
     * VkSamplerYcbcrModelConversion/
     */
    public function getSuggestedYcbcrModel(): \iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion
    {
        $cValue = $this->cdata->suggestedYcbcrModel;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion::from($cValue);
        return $phpValue;
    }

    public function setSuggestedYcbcrModel(\iggyvolz\vulkan\enum\VkSamplerYcbcrModelConversion $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->suggestedYcbcrModel = $cValue;
    }

    /**
     * VkSamplerYcbcrRange/
     */
    public function getSuggestedYcbcrRange(): \iggyvolz\vulkan\enum\VkSamplerYcbcrRange
    {
        $cValue = $this->cdata->suggestedYcbcrRange;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerYcbcrRange::from($cValue);
        return $phpValue;
    }

    public function setSuggestedYcbcrRange(\iggyvolz\vulkan\enum\VkSamplerYcbcrRange $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->suggestedYcbcrRange = $cValue;
    }

    /**
     * VkChromaLocation/
     */
    public function getSuggestedXChromaOffset(): \iggyvolz\vulkan\enum\VkChromaLocation
    {
        $cValue = $this->cdata->suggestedXChromaOffset;
        $phpValue = \iggyvolz\vulkan\enum\VkChromaLocation::from($cValue);
        return $phpValue;
    }

    public function setSuggestedXChromaOffset(\iggyvolz\vulkan\enum\VkChromaLocation $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->suggestedXChromaOffset = $cValue;
    }

    /**
     * VkChromaLocation/
     */
    public function getSuggestedYChromaOffset(): \iggyvolz\vulkan\enum\VkChromaLocation
    {
        $cValue = $this->cdata->suggestedYChromaOffset;
        $phpValue = \iggyvolz\vulkan\enum\VkChromaLocation::from($cValue);
        return $phpValue;
    }

    public function setSuggestedYChromaOffset(\iggyvolz\vulkan\enum\VkChromaLocation $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->suggestedYChromaOffset = $cValue;
    }
}
