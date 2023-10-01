<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRectLayerKHR
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
        null|VkOffset2D $offset = null,
        null|VkExtent2D $extent = null,
        null|int $layer = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRectLayerKHR', false), $vulkan->ffi);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($extent)) $self->setExtent($extent);
        if(!is_null($layer)) $self->setLayer($layer);
        return $self;
    }

    /**
     * VkOffset2D/
     */
    public function getOffset(): VkOffset2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue, $ffi);
        return $phpValue;
    }

    public function setOffset(VkOffset2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->offset = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->extent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->extent = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayer(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLayer(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->layer = $cValue;
    }
}
