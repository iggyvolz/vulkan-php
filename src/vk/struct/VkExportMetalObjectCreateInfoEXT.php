<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMetalObjectCreateInfoEXT
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
        null|\iggyvolz\vulkan\enum\VkExportMetalObjectTypeFlagBitsEXT $exportObjectType = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMetalObjectCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($exportObjectType)) $self->setExportObjectType($exportObjectType);
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
     * VkExportMetalObjectTypeFlagBitsEXT/
     */
    public function getExportObjectType(): \iggyvolz\vulkan\enum\VkExportMetalObjectTypeFlagBitsEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->exportObjectType;
        $phpValue = \iggyvolz\vulkan\enum\VkExportMetalObjectTypeFlagBitsEXT::from($cValue);
        return $phpValue;
    }

    public function setExportObjectType(\iggyvolz\vulkan\enum\VkExportMetalObjectTypeFlagBitsEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->exportObjectType = $cValue;
    }
}
