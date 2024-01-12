<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseImageMemoryRequirements implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "formatProperties" => $this->getFormatProperties(),
          "imageMipTailFirstLod" => $this->getImageMipTailFirstLod(),
          "imageMipTailSize" => $this->getImageMipTailSize(),
          "imageMipTailOffset" => $this->getImageMipTailOffset(),
          "imageMipTailStride" => $this->getImageMipTailStride(),
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
        null|VkSparseImageFormatProperties $formatProperties = null,
        null|int $imageMipTailFirstLod = null,
        null|int $imageMipTailSize = null,
        null|int $imageMipTailOffset = null,
        null|int $imageMipTailStride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseImageMemoryRequirements', false), $vulkan);
        if(!is_null($formatProperties)) $self->setFormatProperties($formatProperties);
        if(!is_null($imageMipTailFirstLod)) $self->setImageMipTailFirstLod($imageMipTailFirstLod);
        if(!is_null($imageMipTailSize)) $self->setImageMipTailSize($imageMipTailSize);
        if(!is_null($imageMipTailOffset)) $self->setImageMipTailOffset($imageMipTailOffset);
        if(!is_null($imageMipTailStride)) $self->setImageMipTailStride($imageMipTailStride);
        return $self;
    }

    /**
     * VkSparseImageFormatProperties/
     */
    public function getFormatProperties(): VkSparseImageFormatProperties
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->formatProperties;
        $phpValue = new \iggyvolz\vulkan\struct\VkSparseImageFormatProperties($cValue, $ffi);
        return $phpValue;
    }

    public function setFormatProperties(VkSparseImageFormatProperties $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->formatProperties = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageMipTailFirstLod(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageMipTailFirstLod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageMipTailFirstLod(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->imageMipTailFirstLod = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getImageMipTailSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageMipTailSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageMipTailSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->imageMipTailSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getImageMipTailOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageMipTailOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageMipTailOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->imageMipTailOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getImageMipTailStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageMipTailStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageMipTailStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->imageMipTailStride = $cValue;
    }
}
