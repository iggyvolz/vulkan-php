<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFormatProperties
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
        null|array $linearTilingFeatures = null,
        null|array $optimalTilingFeatures = null,
        null|array $bufferFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFormatProperties', false), $vulkan->ffi);
        if(!is_null($linearTilingFeatures)) $self->setLinearTilingFeatures($linearTilingFeatures);
        if(!is_null($optimalTilingFeatures)) $self->setOptimalTilingFeatures($optimalTilingFeatures);
        if(!is_null($bufferFeatures)) $self->setBufferFeatures($bufferFeatures);
        return $self;
    }

    /**
     * VkFormatFeatureFlags/
     */
    public function getLinearTilingFeatures(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->linearTilingFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setLinearTilingFeatures(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->linearTilingFeatures = $cValue;
    }

    /**
     * VkFormatFeatureFlags/
     */
    public function getOptimalTilingFeatures(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->optimalTilingFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setOptimalTilingFeatures(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->optimalTilingFeatures = $cValue;
    }

    /**
     * VkFormatFeatureFlags/
     */
    public function getBufferFeatures(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setBufferFeatures(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->bufferFeatures = $cValue;
    }
}
