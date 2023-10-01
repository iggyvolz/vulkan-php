<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageBlit
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
        null|VkImageSubresourceLayers $srcSubresource = null,
        mixed $srcOffsets = null,
        null|VkImageSubresourceLayers $dstSubresource = null,
        mixed $dstOffsets = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageBlit', false), $vulkan->ffi);
        if(!is_null($srcSubresource)) $self->setSrcSubresource($srcSubresource);
        if(!is_null($srcOffsets)) $self->setSrcOffsets($srcOffsets);
        if(!is_null($dstSubresource)) $self->setDstSubresource($dstSubresource);
        if(!is_null($dstOffsets)) $self->setDstOffsets($dstOffsets);
        return $self;
    }

    /**
     * VkImageSubresourceLayers/
     */
    public function getSrcSubresource(): VkImageSubresourceLayers
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcSubresource = $cValue;
    }

    /**
     * void* /
     */
    public function getSrcOffsets(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcOffsets;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSrcOffsets(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->srcOffsets = $cValue;
    }

    /**
     * VkImageSubresourceLayers/
     */
    public function getDstSubresource(): VkImageSubresourceLayers
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setDstSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstSubresource = $cValue;
    }

    /**
     * void* /
     */
    public function getDstOffsets(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstOffsets;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDstOffsets(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->dstOffsets = $cValue;
    }
}
