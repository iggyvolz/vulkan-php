<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExternalSemaphoreProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "exportFromImportedHandleTypes" => $this->getExportFromImportedHandleTypes(),
          "compatibleHandleTypes" => $this->getCompatibleHandleTypes(),
          "externalSemaphoreFeatures" => $this->getExternalSemaphoreFeatures(),
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
        null|array $exportFromImportedHandleTypes = null,
        null|array $compatibleHandleTypes = null,
        null|array $externalSemaphoreFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExternalSemaphoreProperties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($exportFromImportedHandleTypes)) $self->setExportFromImportedHandleTypes($exportFromImportedHandleTypes);
        if(!is_null($compatibleHandleTypes)) $self->setCompatibleHandleTypes($compatibleHandleTypes);
        if(!is_null($externalSemaphoreFeatures)) $self->setExternalSemaphoreFeatures($externalSemaphoreFeatures);
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
     * VkExternalSemaphoreHandleTypeFlags/
     */
    public function getExportFromImportedHandleTypes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->exportFromImportedHandleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalSemaphoreHandleTypeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExportFromImportedHandleTypes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalSemaphoreHandleTypeFlagBits::toInt(...$phpValue);
        $this->cdata->exportFromImportedHandleTypes = $cValue;
    }

    /**
     * VkExternalSemaphoreHandleTypeFlags/
     */
    public function getCompatibleHandleTypes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->compatibleHandleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalSemaphoreHandleTypeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setCompatibleHandleTypes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalSemaphoreHandleTypeFlagBits::toInt(...$phpValue);
        $this->cdata->compatibleHandleTypes = $cValue;
    }

    /**
     * VkExternalSemaphoreFeatureFlags/
     */
    public function getExternalSemaphoreFeatures(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->externalSemaphoreFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalSemaphoreFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setExternalSemaphoreFeatures(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalSemaphoreFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->externalSemaphoreFeatures = $cValue;
    }
}
