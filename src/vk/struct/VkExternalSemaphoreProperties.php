<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExternalSemaphoreProperties
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
        mixed $exportFromImportedHandleTypes = null,
        mixed $compatibleHandleTypes = null,
        mixed $externalSemaphoreFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExternalSemaphoreProperties', false), $vulkan->ffi);
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

    /**
     * void* /
     */
    public function getExternalSemaphoreFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->externalSemaphoreFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setExternalSemaphoreFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->externalSemaphoreFeatures = $cValue;
    }
}
