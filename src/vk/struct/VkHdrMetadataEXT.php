<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkHdrMetadataEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "displayPrimaryRed" => $this->getDisplayPrimaryRed(),
          "displayPrimaryGreen" => $this->getDisplayPrimaryGreen(),
          "displayPrimaryBlue" => $this->getDisplayPrimaryBlue(),
          "whitePoint" => $this->getWhitePoint(),
          "maxLuminance" => $this->getMaxLuminance(),
          "minLuminance" => $this->getMinLuminance(),
          "maxContentLightLevel" => $this->getMaxContentLightLevel(),
          "maxFrameAverageLightLevel" => $this->getMaxFrameAverageLightLevel(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
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
        $self = new self( $vulkan->ffi->new('VkHdrMetadataEXT', false));
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
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkXYColorEXT/
     */
    public function getDisplayPrimaryRed(): VkXYColorEXT
    {
        $cValue = $this->cdata->displayPrimaryRed;
        $phpValue = new \iggyvolz\vulkan\struct\VkXYColorEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplayPrimaryRed(VkXYColorEXT $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->displayPrimaryRed = $cValue;
    }

    /**
     * VkXYColorEXT/
     */
    public function getDisplayPrimaryGreen(): VkXYColorEXT
    {
        $cValue = $this->cdata->displayPrimaryGreen;
        $phpValue = new \iggyvolz\vulkan\struct\VkXYColorEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplayPrimaryGreen(VkXYColorEXT $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->displayPrimaryGreen = $cValue;
    }

    /**
     * VkXYColorEXT/
     */
    public function getDisplayPrimaryBlue(): VkXYColorEXT
    {
        $cValue = $this->cdata->displayPrimaryBlue;
        $phpValue = new \iggyvolz\vulkan\struct\VkXYColorEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplayPrimaryBlue(VkXYColorEXT $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->displayPrimaryBlue = $cValue;
    }

    /**
     * VkXYColorEXT/
     */
    public function getWhitePoint(): VkXYColorEXT
    {
        $cValue = $this->cdata->whitePoint;
        $phpValue = new \iggyvolz\vulkan\struct\VkXYColorEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setWhitePoint(VkXYColorEXT $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->whitePoint = $cValue;
    }

    /**
     * float/
     */
    public function getMaxLuminance(): float
    {
        $cValue = $this->cdata->maxLuminance;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxLuminance(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxLuminance = $cValue;
    }

    /**
     * float/
     */
    public function getMinLuminance(): float
    {
        $cValue = $this->cdata->minLuminance;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinLuminance(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->minLuminance = $cValue;
    }

    /**
     * float/
     */
    public function getMaxContentLightLevel(): float
    {
        $cValue = $this->cdata->maxContentLightLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxContentLightLevel(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxContentLightLevel = $cValue;
    }

    /**
     * float/
     */
    public function getMaxFrameAverageLightLevel(): float
    {
        $cValue = $this->cdata->maxFrameAverageLightLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFrameAverageLightLevel(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxFrameAverageLightLevel = $cValue;
    }
}
