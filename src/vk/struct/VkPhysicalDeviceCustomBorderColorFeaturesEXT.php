<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceCustomBorderColorFeaturesEXT
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
        null|bool $customBorderColors = null,
        null|bool $customBorderColorWithoutFormat = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceCustomBorderColorFeaturesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($customBorderColors)) $self->setCustomBorderColors($customBorderColors);
        if(!is_null($customBorderColorWithoutFormat)) $self->setCustomBorderColorWithoutFormat($customBorderColorWithoutFormat);
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
     * uint32_t/
     */
    public function getCustomBorderColors(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->customBorderColors;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCustomBorderColors(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->customBorderColors = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCustomBorderColorWithoutFormat(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->customBorderColorWithoutFormat;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCustomBorderColorWithoutFormat(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->customBorderColorWithoutFormat = $cValue;
    }
}
