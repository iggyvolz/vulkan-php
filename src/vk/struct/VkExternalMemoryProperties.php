<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExternalMemoryProperties
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
        null|array $externalMemoryFeatures = null,
        null|array $exportFromImportedHandleTypes = null,
        null|array $compatibleHandleTypes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExternalMemoryProperties', false), $vulkan->ffi);
        if(!is_null($externalMemoryFeatures)) $self->setExternalMemoryFeatures($externalMemoryFeatures);
        if(!is_null($exportFromImportedHandleTypes)) $self->setExportFromImportedHandleTypes($exportFromImportedHandleTypes);
        if(!is_null($compatibleHandleTypes)) $self->setCompatibleHandleTypes($compatibleHandleTypes);
        return $self;
    }

    /**
     * VkExternalMemoryFeatureFlags/
     */
    public function getExternalMemoryFeatures(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->externalMemoryFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExternalMemoryFeatures(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->externalMemoryFeatures = $cValue;
    }

    /**
     * VkExternalMemoryHandleTypeFlags/
     */
    public function getExportFromImportedHandleTypes(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->exportFromImportedHandleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExportFromImportedHandleTypes(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::toInt(...$phpValue);
        $this->cdata->exportFromImportedHandleTypes = $cValue;
    }

    /**
     * VkExternalMemoryHandleTypeFlags/
     */
    public function getCompatibleHandleTypes(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->compatibleHandleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setCompatibleHandleTypes(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::toInt(...$phpValue);
        $this->cdata->compatibleHandleTypes = $cValue;
    }
}
