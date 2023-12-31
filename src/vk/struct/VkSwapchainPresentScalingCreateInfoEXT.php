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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $scalingBehavior = null,
        null|array $presentGravityX = null,
        null|array $presentGravityY = null,
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
     * VkPresentScalingFlagsEXT/
     */
    public function getScalingBehavior(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->scalingBehavior;
        $phpValue = \iggyvolz\vulkan\enum\VkPresentScalingFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setScalingBehavior(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPresentScalingFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->scalingBehavior = $cValue;
    }

    /**
     * VkPresentGravityFlagsEXT/
     */
    public function getPresentGravityX(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentGravityX;
        $phpValue = \iggyvolz\vulkan\enum\VkPresentGravityFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setPresentGravityX(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPresentGravityFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->presentGravityX = $cValue;
    }

    /**
     * VkPresentGravityFlagsEXT/
     */
    public function getPresentGravityY(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentGravityY;
        $phpValue = \iggyvolz\vulkan\enum\VkPresentGravityFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setPresentGravityY(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPresentGravityFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->presentGravityY = $cValue;
    }
}
