<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkViewportWScalingNV
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
        null|float $xcoeff = null,
        null|float $ycoeff = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkViewportWScalingNV', false), $vulkan->ffi);
        if(!is_null($xcoeff)) $self->setXcoeff($xcoeff);
        if(!is_null($ycoeff)) $self->setYcoeff($ycoeff);
        return $self;
    }

    /**
     * float/
     */
    public function getXcoeff(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->xcoeff;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setXcoeff(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->xcoeff = $cValue;
    }

    /**
     * float/
     */
    public function getYcoeff(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->ycoeff;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setYcoeff(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->ycoeff = $cValue;
    }
}
