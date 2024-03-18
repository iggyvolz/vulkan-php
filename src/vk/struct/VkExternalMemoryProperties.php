<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExternalMemoryProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|array $externalMemoryFeatures = null,
        null|array $exportFromImportedHandleTypes = null,
        null|array $compatibleHandleTypes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExternalMemoryProperties', false));
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
        $cValue = $this->cdata->externalMemoryFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExternalMemoryFeatures(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->externalMemoryFeatures = $cValue;
    }

    /**
     * VkExternalMemoryHandleTypeFlags/
     */
    public function getExportFromImportedHandleTypes(): array
    {
        $cValue = $this->cdata->exportFromImportedHandleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExportFromImportedHandleTypes(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::toInt(...$phpValue);
        $this->cdata->exportFromImportedHandleTypes = $cValue;
    }

    /**
     * VkExternalMemoryHandleTypeFlags/
     */
    public function getCompatibleHandleTypes(): array
    {
        $cValue = $this->cdata->compatibleHandleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setCompatibleHandleTypes(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::toInt(...$phpValue);
        $this->cdata->compatibleHandleTypes = $cValue;
    }
}
