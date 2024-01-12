<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplaySurfaceCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "displayMode" => $this->getDisplayMode(),
          "planeIndex" => $this->getPlaneIndex(),
          "planeStackIndex" => $this->getPlaneStackIndex(),
          "transform" => $this->getTransform(),
          "globalAlpha" => $this->getGlobalAlpha(),
          "alphaMode" => $this->getAlphaMode(),
          "imageExtent" => $this->getImageExtent(),
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
        null|array $flags = null,
        null|VkDisplayModeKHR $displayMode = null,
        null|int $planeIndex = null,
        null|int $planeStackIndex = null,
        null|\iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR $transform = null,
        null|float $globalAlpha = null,
        null|\iggyvolz\vulkan\enum\VkDisplayPlaneAlphaFlagBitsKHR $alphaMode = null,
        null|VkExtent2D $imageExtent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplaySurfaceCreateInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($displayMode)) $self->setDisplayMode($displayMode);
        if(!is_null($planeIndex)) $self->setPlaneIndex($planeIndex);
        if(!is_null($planeStackIndex)) $self->setPlaneStackIndex($planeStackIndex);
        if(!is_null($transform)) $self->setTransform($transform);
        if(!is_null($globalAlpha)) $self->setGlobalAlpha($globalAlpha);
        if(!is_null($alphaMode)) $self->setAlphaMode($alphaMode);
        if(!is_null($imageExtent)) $self->setImageExtent($imageExtent);
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
     * VkDisplaySurfaceCreateFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkDisplayModeKHR/
     */
    public function getDisplayMode(): VkDisplayModeKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->displayMode;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayModeKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplayMode(VkDisplayModeKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->displayMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPlaneIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->planeIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPlaneIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->planeIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPlaneStackIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->planeStackIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPlaneStackIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->planeStackIndex = $cValue;
    }

    /**
     * VkSurfaceTransformFlagBitsKHR/
     */
    public function getTransform(): \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->transform;
        $phpValue = \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setTransform(\iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->transform = $cValue;
    }

    /**
     * float/
     */
    public function getGlobalAlpha(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->globalAlpha;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGlobalAlpha(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->globalAlpha = $cValue;
    }

    /**
     * VkDisplayPlaneAlphaFlagBitsKHR/
     */
    public function getAlphaMode(): \iggyvolz\vulkan\enum\VkDisplayPlaneAlphaFlagBitsKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->alphaMode;
        $phpValue = \iggyvolz\vulkan\enum\VkDisplayPlaneAlphaFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setAlphaMode(\iggyvolz\vulkan\enum\VkDisplayPlaneAlphaFlagBitsKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->alphaMode = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getImageExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageExtent = $cValue;
    }
}
