<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkTraceRaysIndirectCommandKHR
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
        null|int $depth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkTraceRaysIndirectCommandKHR', false), $vulkan->ffi);
        if(!is_null($width)) $self->setWidth($width);
        if(!is_null($height)) $self->setHeight($height);
        if(!is_null($depth)) $self->setDepth($depth);
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

    /**
     * uint32_t/
     */
    public function getDepth(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepth(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->depth = $cValue;
    }
}
