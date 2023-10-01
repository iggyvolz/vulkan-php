<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageSubresource
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
        null|int $mipLevel = null,
        null|int $arrayLayer = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageSubresource', false), $vulkan->ffi);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        if(!is_null($mipLevel)) $self->setMipLevel($mipLevel);
        if(!is_null($arrayLayer)) $self->setArrayLayer($arrayLayer);
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
     * uint32_t/
     */
    public function getMipLevel(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mipLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMipLevel(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->mipLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getArrayLayer(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->arrayLayer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setArrayLayer(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->arrayLayer = $cValue;
    }
}
