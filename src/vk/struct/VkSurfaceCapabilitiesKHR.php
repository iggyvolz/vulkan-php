<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSurfaceCapabilitiesKHR
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
        null|int $minImageCount = null,
        null|int $maxImageCount = null,
        null|VkExtent2D $currentExtent = null,
        null|VkExtent2D $minImageExtent = null,
        null|VkExtent2D $maxImageExtent = null,
        null|int $maxImageArrayLayers = null,
        mixed $supportedTransforms = null,
        null|\iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR $currentTransform = null,
        mixed $supportedCompositeAlpha = null,
        mixed $supportedUsageFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSurfaceCapabilitiesKHR', false), $vulkan->ffi);
        if(!is_null($minImageCount)) $self->setMinImageCount($minImageCount);
        if(!is_null($maxImageCount)) $self->setMaxImageCount($maxImageCount);
        if(!is_null($currentExtent)) $self->setCurrentExtent($currentExtent);
        if(!is_null($minImageExtent)) $self->setMinImageExtent($minImageExtent);
        if(!is_null($maxImageExtent)) $self->setMaxImageExtent($maxImageExtent);
        if(!is_null($maxImageArrayLayers)) $self->setMaxImageArrayLayers($maxImageArrayLayers);
        if(!is_null($supportedTransforms)) $self->setSupportedTransforms($supportedTransforms);
        if(!is_null($currentTransform)) $self->setCurrentTransform($currentTransform);
        if(!is_null($supportedCompositeAlpha)) $self->setSupportedCompositeAlpha($supportedCompositeAlpha);
        if(!is_null($supportedUsageFlags)) $self->setSupportedUsageFlags($supportedUsageFlags);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getMinImageCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minImageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinImageCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minImageCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxImageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageCount = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getCurrentExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->currentExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setCurrentExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->currentExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMinImageExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minImageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinImageExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minImageExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxImageExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxImageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxImageExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxImageExtent = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageArrayLayers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxImageArrayLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageArrayLayers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageArrayLayers = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedTransforms(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedTransforms;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedTransforms(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedTransforms = $cValue;
    }

    /**
     * VkSurfaceTransformFlagBitsKHR/
     */
    public function getCurrentTransform(): \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->currentTransform;
        $phpValue = \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setCurrentTransform(\iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->currentTransform = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedCompositeAlpha(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedCompositeAlpha;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedCompositeAlpha(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedCompositeAlpha = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedUsageFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedUsageFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedUsageFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedUsageFlags = $cValue;
    }
}
