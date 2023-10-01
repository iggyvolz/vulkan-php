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
        mixed $linearTilingFeatures = null,
        mixed $optimalTilingFeatures = null,
        mixed $bufferFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFormatProperties', false), $vulkan->ffi);
        if(!is_null($linearTilingFeatures)) $self->setLinearTilingFeatures($linearTilingFeatures);
        if(!is_null($optimalTilingFeatures)) $self->setOptimalTilingFeatures($optimalTilingFeatures);
        if(!is_null($bufferFeatures)) $self->setBufferFeatures($bufferFeatures);
        return $self;
    }

    /**
     * void* /
     */
    public function getLinearTilingFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->linearTilingFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setLinearTilingFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->linearTilingFeatures = $cValue;
    }

    /**
     * void* /
     */
    public function getOptimalTilingFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->optimalTilingFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setOptimalTilingFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->optimalTilingFeatures = $cValue;
    }

    /**
     * void* /
     */
    public function getBufferFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setBufferFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->bufferFeatures = $cValue;
    }
}
