<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSwapchainPresentScalingCreateInfoEXT
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
        mixed $scalingBehavior = null,
        mixed $presentGravityX = null,
        mixed $presentGravityY = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSwapchainPresentScalingCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($scalingBehavior)) $self->setScalingBehavior($scalingBehavior);
        if(!is_null($presentGravityX)) $self->setPresentGravityX($presentGravityX);
        if(!is_null($presentGravityY)) $self->setPresentGravityY($presentGravityY);
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
    public function getScalingBehavior(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->scalingBehavior;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setScalingBehavior(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->scalingBehavior = $cValue;
    }

    /**
     * void* /
     */
    public function getPresentGravityX(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentGravityX;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPresentGravityX(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->presentGravityX = $cValue;
    }

    /**
     * void* /
     */
    public function getPresentGravityY(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentGravityY;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPresentGravityY(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->presentGravityY = $cValue;
    }
}
