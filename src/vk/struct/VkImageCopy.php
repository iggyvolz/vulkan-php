<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageCopy implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "srcSubresource" => $this->getSrcSubresource(),
          "srcOffset" => $this->getSrcOffset(),
          "dstSubresource" => $this->getDstSubresource(),
          "dstOffset" => $this->getDstOffset(),
          "extent" => $this->getExtent(),
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
        null|VkImageSubresourceLayers $srcSubresource = null,
        null|VkOffset3D $srcOffset = null,
        null|VkImageSubresourceLayers $dstSubresource = null,
        null|VkOffset3D $dstOffset = null,
        null|VkExtent3D $extent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageCopy', false), $vulkan);
        if(!is_null($srcSubresource)) $self->setSrcSubresource($srcSubresource);
        if(!is_null($srcOffset)) $self->setSrcOffset($srcOffset);
        if(!is_null($dstSubresource)) $self->setDstSubresource($dstSubresource);
        if(!is_null($dstOffset)) $self->setDstOffset($dstOffset);
        if(!is_null($extent)) $self->setExtent($extent);
        return $self;
    }

    /**
     * VkImageSubresourceLayers/
     */
    public function getSrcSubresource(): VkImageSubresourceLayers
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcSubresource = $cValue;
    }

    /**
     * VkOffset3D/
     */
    public function getSrcOffset(): VkOffset3D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcOffset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset3D($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcOffset(VkOffset3D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcOffset = $cValue;
    }

    /**
     * VkImageSubresourceLayers/
     */
    public function getDstSubresource(): VkImageSubresourceLayers
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setDstSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstSubresource = $cValue;
    }

    /**
     * VkOffset3D/
     */
    public function getDstOffset(): VkOffset3D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstOffset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset3D($cValue, $ffi);
        return $phpValue;
    }

    public function setDstOffset(VkOffset3D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstOffset = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getExtent(): VkExtent3D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->extent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setExtent(VkExtent3D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->extent = $cValue;
    }
}
