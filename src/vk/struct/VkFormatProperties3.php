<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFormatProperties3
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
        null|array $linearTilingFeatures = null,
        null|array $optimalTilingFeatures = null,
        null|array $bufferFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFormatProperties3', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($linearTilingFeatures)) $self->setLinearTilingFeatures($linearTilingFeatures);
        if(!is_null($optimalTilingFeatures)) $self->setOptimalTilingFeatures($optimalTilingFeatures);
        if(!is_null($bufferFeatures)) $self->setBufferFeatures($bufferFeatures);
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
     * VkFormatFeatureFlags2/
     */
    public function getLinearTilingFeatures(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->linearTilingFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setLinearTilingFeatures(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::toInt(...$phpValue);
        $this->cdata->linearTilingFeatures = $cValue;
    }

    /**
     * VkFormatFeatureFlags2/
     */
    public function getOptimalTilingFeatures(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->optimalTilingFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setOptimalTilingFeatures(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::toInt(...$phpValue);
        $this->cdata->optimalTilingFeatures = $cValue;
    }

    /**
     * VkFormatFeatureFlags2/
     */
    public function getBufferFeatures(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setBufferFeatures(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::toInt(...$phpValue);
        $this->cdata->bufferFeatures = $cValue;
    }
}
