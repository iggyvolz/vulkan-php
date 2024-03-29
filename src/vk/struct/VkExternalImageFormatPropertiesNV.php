<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExternalImageFormatPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "imageFormatProperties" => $this->getImageFormatProperties(),
          "externalMemoryFeatures" => $this->getExternalMemoryFeatures(),
          "exportFromImportedHandleTypes" => $this->getExportFromImportedHandleTypes(),
          "compatibleHandleTypes" => $this->getCompatibleHandleTypes(),
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
        null|VkImageFormatProperties $imageFormatProperties = null,
        null|array $externalMemoryFeatures = null,
        null|array $exportFromImportedHandleTypes = null,
        null|array $compatibleHandleTypes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExternalImageFormatPropertiesNV', false), $vulkan);
        if(!is_null($imageFormatProperties)) $self->setImageFormatProperties($imageFormatProperties);
        if(!is_null($externalMemoryFeatures)) $self->setExternalMemoryFeatures($externalMemoryFeatures);
        if(!is_null($exportFromImportedHandleTypes)) $self->setExportFromImportedHandleTypes($exportFromImportedHandleTypes);
        if(!is_null($compatibleHandleTypes)) $self->setCompatibleHandleTypes($compatibleHandleTypes);
        return $self;
    }

    /**
     * VkImageFormatProperties/
     */
    public function getImageFormatProperties(): VkImageFormatProperties
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageFormatProperties;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageFormatProperties($cValue, $ffi);
        return $phpValue;
    }

    public function setImageFormatProperties(VkImageFormatProperties $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageFormatProperties = $cValue;
    }

    /**
     * VkExternalMemoryFeatureFlagsNV/
     */
    public function getExternalMemoryFeatures(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->externalMemoryFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryFeatureFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setExternalMemoryFeatures(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryFeatureFlagBitsNV::toInt(...$phpValue);
        $this->cdata->externalMemoryFeatures = $cValue;
    }

    /**
     * VkExternalMemoryHandleTypeFlagsNV/
     */
    public function getExportFromImportedHandleTypes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->exportFromImportedHandleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setExportFromImportedHandleTypes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::toInt(...$phpValue);
        $this->cdata->exportFromImportedHandleTypes = $cValue;
    }

    /**
     * VkExternalMemoryHandleTypeFlagsNV/
     */
    public function getCompatibleHandleTypes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->compatibleHandleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setCompatibleHandleTypes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::toInt(...$phpValue);
        $this->cdata->compatibleHandleTypes = $cValue;
    }
}
