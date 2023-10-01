<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevice4444FormatsFeaturesEXT
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
        null|bool $formatA4R4G4B4 = null,
        null|bool $formatA4B4G4R4 = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevice4444FormatsFeaturesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($formatA4R4G4B4)) $self->setFormatA4R4G4B4($formatA4R4G4B4);
        if(!is_null($formatA4B4G4R4)) $self->setFormatA4B4G4R4($formatA4B4G4R4);
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
    public function getFormatA4R4G4B4(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->formatA4R4G4B4;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFormatA4R4G4B4(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->formatA4R4G4B4 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFormatA4B4G4R4(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->formatA4B4G4R4;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFormatA4B4G4R4(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->formatA4B4G4R4 = $cValue;
    }
}
