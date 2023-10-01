<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSurfacePresentScalingCapabilitiesEXT
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
        mixed $supportedPresentScaling = null,
        mixed $supportedPresentGravityX = null,
        mixed $supportedPresentGravityY = null,
        null|VkExtent2D $minScaledImageExtent = null,
        null|VkExtent2D $maxScaledImageExtent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSurfacePresentScalingCapabilitiesEXT', false), $vulkan->ffi);
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
    public function getSupportedPresentScaling(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedPresentScaling;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedPresentScaling(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedPresentScaling = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedPresentGravityX(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedPresentGravityX;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedPresentGravityX(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedPresentGravityX = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedPresentGravityY(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedPresentGravityY;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedPresentGravityY(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedPresentGravityY = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMinScaledImageExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minScaledImageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinScaledImageExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minScaledImageExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxScaledImageExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxScaledImageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxScaledImageExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxScaledImageExtent = $cValue;
    }
}
