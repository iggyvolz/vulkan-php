<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkViewportWScalingNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "xcoeff" => $this->getXcoeff(),
          "ycoeff" => $this->getYcoeff(),
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
        null|float $xcoeff = null,
        null|float $ycoeff = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkViewportWScalingNV', false), $vulkan);
        if(!is_null($xcoeff)) $self->setXcoeff($xcoeff);
        if(!is_null($ycoeff)) $self->setYcoeff($ycoeff);
        return $self;
    }

    /**
     * float/
     */
    public function getXcoeff(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->xcoeff;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setXcoeff(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->xcoeff = $cValue;
    }

    /**
     * float/
     */
    public function getYcoeff(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->ycoeff;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setYcoeff(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->ycoeff = $cValue;
    }
}
