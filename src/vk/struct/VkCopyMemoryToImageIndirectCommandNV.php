<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyMemoryToImageIndirectCommandNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "srcAddress" => $this->getSrcAddress(),
          "bufferRowLength" => $this->getBufferRowLength(),
          "bufferImageHeight" => $this->getBufferImageHeight(),
          "imageSubresource" => $this->getImageSubresource(),
          "imageOffset" => $this->getImageOffset(),
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
        null|int $srcAddress = null,
        null|int $bufferRowLength = null,
        null|int $bufferImageHeight = null,
        null|VkImageSubresourceLayers $imageSubresource = null,
        null|VkOffset3D $imageOffset = null,
        null|VkExtent3D $imageExtent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyMemoryToImageIndirectCommandNV', false), $vulkan);
        if(!is_null($srcAddress)) $self->setSrcAddress($srcAddress);
        if(!is_null($bufferRowLength)) $self->setBufferRowLength($bufferRowLength);
        if(!is_null($bufferImageHeight)) $self->setBufferImageHeight($bufferImageHeight);
        if(!is_null($imageSubresource)) $self->setImageSubresource($imageSubresource);
        if(!is_null($imageOffset)) $self->setImageOffset($imageOffset);
        if(!is_null($imageExtent)) $self->setImageExtent($imageExtent);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getSrcAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->srcAddress = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferRowLength(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferRowLength;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferRowLength(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferRowLength = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferImageHeight(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferImageHeight;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferImageHeight(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferImageHeight = $cValue;
    }

    /**
     * VkImageSubresourceLayers/
     */
    public function getImageSubresource(): VkImageSubresourceLayers
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setImageSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageSubresource = $cValue;
    }

    /**
     * VkOffset3D/
     */
    public function getImageOffset(): VkOffset3D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageOffset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset3D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageOffset(VkOffset3D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageOffset = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getImageExtent(): VkExtent3D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageExtent(VkExtent3D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageExtent = $cValue;
    }
}
