<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageDrmFormatModifierExplicitCreateInfoEXT
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
        null|int $drmFormatModifier = null,
        null|int $drmFormatModifierPlaneCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPlaneLayouts = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageDrmFormatModifierExplicitCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($drmFormatModifier)) $self->setDrmFormatModifier($drmFormatModifier);
        if(!is_null($drmFormatModifierPlaneCount)) $self->setDrmFormatModifierPlaneCount($drmFormatModifierPlaneCount);
        if(!is_null($pPlaneLayouts)) $self->setPPlaneLayouts($pPlaneLayouts);
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
     * uint64_t/
     */
    public function getDrmFormatModifier(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->drmFormatModifier;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDrmFormatModifier(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->drmFormatModifier = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDrmFormatModifierPlaneCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->drmFormatModifierPlaneCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDrmFormatModifierPlaneCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->drmFormatModifierPlaneCount = $cValue;
    }

    /**
     * VkSubresourceLayout* /
     */
    public function getPPlaneLayouts(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPlaneLayouts;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSubresourceLayout', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPlaneLayouts(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPlaneLayouts = $cValue;
    }
}
