<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseImageFormatProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "aspectMask" => $this->getAspectMask(),
          "imageGranularity" => $this->getImageGranularity(),
          "flags" => $this->getFlags(),
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
        null|array $aspectMask = null,
        null|VkExtent3D $imageGranularity = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseImageFormatProperties', false), $vulkan);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        if(!is_null($imageGranularity)) $self->setImageGranularity($imageGranularity);
        if(!is_null($flags)) $self->setFlags($flags);
        return $self;
    }

    /**
     * VkImageAspectFlags/
     */
    public function getAspectMask(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->aspectMask;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setAspectMask(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $this->cdata->aspectMask = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getImageGranularity(): VkExtent3D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageGranularity;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageGranularity(VkExtent3D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageGranularity = $cValue;
    }

    /**
     * VkSparseImageFormatFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSparseImageFormatFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSparseImageFormatFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
