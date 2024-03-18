<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferImageCopy implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "bufferOffset" => $this->getBufferOffset(),
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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $bufferOffset = null,
        null|int $bufferRowLength = null,
        null|int $bufferImageHeight = null,
        null|VkImageSubresourceLayers $imageSubresource = null,
        null|VkOffset3D $imageOffset = null,
        null|VkExtent3D $imageExtent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferImageCopy', false));
        if(!is_null($bufferOffset)) $self->setBufferOffset($bufferOffset);
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
    public function getBufferOffset(): int
    {
        $cValue = $this->cdata->bufferOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bufferOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferRowLength(): int
    {
        $cValue = $this->cdata->bufferRowLength;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferRowLength(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bufferRowLength = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferImageHeight(): int
    {
        $cValue = $this->cdata->bufferImageHeight;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferImageHeight(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bufferImageHeight = $cValue;
    }

    /**
     * VkImageSubresourceLayers/
     */
    public function getImageSubresource(): VkImageSubresourceLayers
    {
        $cValue = $this->cdata->imageSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setImageSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->imageSubresource = $cValue;
    }

    /**
     * VkOffset3D/
     */
    public function getImageOffset(): VkOffset3D
    {
        $cValue = $this->cdata->imageOffset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset3D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageOffset(VkOffset3D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->imageOffset = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getImageExtent(): VkExtent3D
    {
        $cValue = $this->cdata->imageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageExtent(VkExtent3D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->imageExtent = $cValue;
    }
}
