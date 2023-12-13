<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrmFormatModifierPropertiesList2EXT
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
        null|int $drmFormatModifierCount = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pDrmFormatModifierProperties = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrmFormatModifierPropertiesList2EXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($drmFormatModifierCount)) $self->setDrmFormatModifierCount($drmFormatModifierCount);
        if(!is_null($pDrmFormatModifierProperties)) $self->setPDrmFormatModifierProperties($pDrmFormatModifierProperties);
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
    public function getDrmFormatModifierCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->drmFormatModifierCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDrmFormatModifierCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->drmFormatModifierCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPDrmFormatModifierProperties(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pDrmFormatModifierProperties;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPDrmFormatModifierProperties(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDrmFormatModifierProperties = $cValue;
    }
}
