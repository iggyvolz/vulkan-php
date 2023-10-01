<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExtent2D
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
        null|int $width = null,
        null|int $height = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExtent2D', false), $vulkan->ffi);
        if(!is_null($width)) $self->setWidth($width);
        if(!is_null($height)) $self->setHeight($height);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getWidth(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->width;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWidth(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->width = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeight(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->height;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeight(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->height = $cValue;
    }
}
