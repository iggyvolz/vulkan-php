<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkHdrMetadataEXT
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
        null|VkXYColorEXT $displayPrimaryRed = null,
        null|VkXYColorEXT $displayPrimaryGreen = null,
        null|VkXYColorEXT $displayPrimaryBlue = null,
        null|VkXYColorEXT $whitePoint = null,
        null|float $maxLuminance = null,
        null|float $minLuminance = null,
        null|float $maxContentLightLevel = null,
        null|float $maxFrameAverageLightLevel = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkHdrMetadataEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($displayPrimaryRed)) $self->setDisplayPrimaryRed($displayPrimaryRed);
        if(!is_null($displayPrimaryGreen)) $self->setDisplayPrimaryGreen($displayPrimaryGreen);
        if(!is_null($displayPrimaryBlue)) $self->setDisplayPrimaryBlue($displayPrimaryBlue);
        if(!is_null($whitePoint)) $self->setWhitePoint($whitePoint);
        if(!is_null($maxLuminance)) $self->setMaxLuminance($maxLuminance);
        if(!is_null($minLuminance)) $self->setMinLuminance($minLuminance);
        if(!is_null($maxContentLightLevel)) $self->setMaxContentLightLevel($maxContentLightLevel);
        if(!is_null($maxFrameAverageLightLevel)) $self->setMaxFrameAverageLightLevel($maxFrameAverageLightLevel);
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
     * VkXYColorEXT/
     */
    public function getDisplayPrimaryRed(): VkXYColorEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displayPrimaryRed;
        $phpValue = new \iggyvolz\vulkan\struct\VkXYColorEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplayPrimaryRed(VkXYColorEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->displayPrimaryRed = $cValue;
    }

    /**
     * VkXYColorEXT/
     */
    public function getDisplayPrimaryGreen(): VkXYColorEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displayPrimaryGreen;
        $phpValue = new \iggyvolz\vulkan\struct\VkXYColorEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplayPrimaryGreen(VkXYColorEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->displayPrimaryGreen = $cValue;
    }

    /**
     * VkXYColorEXT/
     */
    public function getDisplayPrimaryBlue(): VkXYColorEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displayPrimaryBlue;
        $phpValue = new \iggyvolz\vulkan\struct\VkXYColorEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplayPrimaryBlue(VkXYColorEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->displayPrimaryBlue = $cValue;
    }

    /**
     * VkXYColorEXT/
     */
    public function getWhitePoint(): VkXYColorEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->whitePoint;
        $phpValue = new \iggyvolz\vulkan\struct\VkXYColorEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setWhitePoint(VkXYColorEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->whitePoint = $cValue;
    }

    /**
     * float/
     */
    public function getMaxLuminance(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxLuminance;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxLuminance(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxLuminance = $cValue;
    }

    /**
     * float/
     */
    public function getMinLuminance(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minLuminance;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinLuminance(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minLuminance = $cValue;
    }

    /**
     * float/
     */
    public function getMaxContentLightLevel(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxContentLightLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxContentLightLevel(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxContentLightLevel = $cValue;
    }

    /**
     * float/
     */
    public function getMaxFrameAverageLightLevel(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxFrameAverageLightLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFrameAverageLightLevel(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFrameAverageLightLevel = $cValue;
    }
}
