<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkClearDepthStencilValue
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
        null|float $depth = null,
        null|int $stencil = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkClearDepthStencilValue', false), $vulkan->ffi);
        if(!is_null($depth)) $self->setDepth($depth);
        if(!is_null($stencil)) $self->setStencil($stencil);
        return $self;
    }

    /**
     * float/
     */
    public function getDepth(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepth(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->depth = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStencil(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stencil;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStencil(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stencil = $cValue;
    }
}
