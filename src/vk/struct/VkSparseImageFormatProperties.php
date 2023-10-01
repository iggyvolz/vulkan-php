<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseImageFormatProperties
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
        mixed $aspectMask = null,
        null|VkExtent3D $imageGranularity = null,
        mixed $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseImageFormatProperties', false), $vulkan->ffi);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        if(!is_null($imageGranularity)) $self->setImageGranularity($imageGranularity);
        if(!is_null($flags)) $self->setFlags($flags);
        return $self;
    }

    /**
     * void* /
     */
    public function getAspectMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->aspectMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setAspectMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->aspectMask = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getImageGranularity(): VkExtent3D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageGranularity;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageGranularity(VkExtent3D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageGranularity = $cValue;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }
}
