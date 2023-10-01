<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExternalImageFormatPropertiesNV
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
        null|VkImageFormatProperties $imageFormatProperties = null,
        mixed $externalMemoryFeatures = null,
        mixed $exportFromImportedHandleTypes = null,
        mixed $compatibleHandleTypes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExternalImageFormatPropertiesNV', false), $vulkan->ffi);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageFormatProperties;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageFormatProperties($cValue, $ffi);
        return $phpValue;
    }

    public function setImageFormatProperties(VkImageFormatProperties $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageFormatProperties = $cValue;
    }

    /**
     * void* /
     */
    public function getExternalMemoryFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->externalMemoryFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setExternalMemoryFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->externalMemoryFeatures = $cValue;
    }

    /**
     * void* /
     */
    public function getExportFromImportedHandleTypes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->exportFromImportedHandleTypes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setExportFromImportedHandleTypes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->exportFromImportedHandleTypes = $cValue;
    }

    /**
     * void* /
     */
    public function getCompatibleHandleTypes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->compatibleHandleTypes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setCompatibleHandleTypes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->compatibleHandleTypes = $cValue;
    }
}
