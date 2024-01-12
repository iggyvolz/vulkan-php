<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSurfacePresentScalingCapabilitiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "supportedPresentScaling" => $this->getSupportedPresentScaling(),
          "supportedPresentGravityX" => $this->getSupportedPresentGravityX(),
          "supportedPresentGravityY" => $this->getSupportedPresentGravityY(),
          "minScaledImageExtent" => $this->getMinScaledImageExtent(),
          "maxScaledImageExtent" => $this->getMaxScaledImageExtent(),
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
        null|array $supportedPresentScaling = null,
        null|array $supportedPresentGravityX = null,
        null|array $supportedPresentGravityY = null,
        null|VkExtent2D $minScaledImageExtent = null,
        null|VkExtent2D $maxScaledImageExtent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSurfacePresentScalingCapabilitiesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($supportedPresentScaling)) $self->setSupportedPresentScaling($supportedPresentScaling);
        if(!is_null($supportedPresentGravityX)) $self->setSupportedPresentGravityX($supportedPresentGravityX);
        if(!is_null($supportedPresentGravityY)) $self->setSupportedPresentGravityY($supportedPresentGravityY);
        if(!is_null($minScaledImageExtent)) $self->setMinScaledImageExtent($minScaledImageExtent);
        if(!is_null($maxScaledImageExtent)) $self->setMaxScaledImageExtent($maxScaledImageExtent);
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
     * VkPresentScalingFlagsEXT/
     */
    public function getSupportedPresentScaling(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportedPresentScaling;
        $phpValue = \iggyvolz\vulkan\enum\VkPresentScalingFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedPresentScaling(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPresentScalingFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->supportedPresentScaling = $cValue;
    }

    /**
     * VkPresentGravityFlagsEXT/
     */
    public function getSupportedPresentGravityX(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportedPresentGravityX;
        $phpValue = \iggyvolz\vulkan\enum\VkPresentGravityFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedPresentGravityX(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPresentGravityFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->supportedPresentGravityX = $cValue;
    }

    /**
     * VkPresentGravityFlagsEXT/
     */
    public function getSupportedPresentGravityY(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportedPresentGravityY;
        $phpValue = \iggyvolz\vulkan\enum\VkPresentGravityFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedPresentGravityY(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPresentGravityFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->supportedPresentGravityY = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMinScaledImageExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minScaledImageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinScaledImageExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minScaledImageExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxScaledImageExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxScaledImageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxScaledImageExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxScaledImageExtent = $cValue;
    }
}
