<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceExternalFormatResolvePropertiesANDROID
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
        null|bool $nullColorAttachmentWithExternalFormatResolve = null,
        null|\iggyvolz\vulkan\enum\VkChromaLocation $externalFormatResolveChromaOffsetX = null,
        null|\iggyvolz\vulkan\enum\VkChromaLocation $externalFormatResolveChromaOffsetY = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceExternalFormatResolvePropertiesANDROID', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($nullColorAttachmentWithExternalFormatResolve)) $self->setNullColorAttachmentWithExternalFormatResolve($nullColorAttachmentWithExternalFormatResolve);
        if(!is_null($externalFormatResolveChromaOffsetX)) $self->setExternalFormatResolveChromaOffsetX($externalFormatResolveChromaOffsetX);
        if(!is_null($externalFormatResolveChromaOffsetY)) $self->setExternalFormatResolveChromaOffsetY($externalFormatResolveChromaOffsetY);
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
    public function getNullColorAttachmentWithExternalFormatResolve(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->nullColorAttachmentWithExternalFormatResolve;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setNullColorAttachmentWithExternalFormatResolve(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->nullColorAttachmentWithExternalFormatResolve = $cValue;
    }

    /**
     * VkChromaLocation/
     */
    public function getExternalFormatResolveChromaOffsetX(): \iggyvolz\vulkan\enum\VkChromaLocation
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->externalFormatResolveChromaOffsetX;
        $phpValue = \iggyvolz\vulkan\enum\VkChromaLocation::from($cValue);
        return $phpValue;
    }

    public function setExternalFormatResolveChromaOffsetX(\iggyvolz\vulkan\enum\VkChromaLocation $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->externalFormatResolveChromaOffsetX = $cValue;
    }

    /**
     * VkChromaLocation/
     */
    public function getExternalFormatResolveChromaOffsetY(): \iggyvolz\vulkan\enum\VkChromaLocation
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->externalFormatResolveChromaOffsetY;
        $phpValue = \iggyvolz\vulkan\enum\VkChromaLocation::from($cValue);
        return $phpValue;
    }

    public function setExternalFormatResolveChromaOffsetY(\iggyvolz\vulkan\enum\VkChromaLocation $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->externalFormatResolveChromaOffsetY = $cValue;
    }
}
