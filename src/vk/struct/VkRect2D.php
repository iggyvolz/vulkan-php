<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRect2D implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "offset" => $this->getOffset(),
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
        null|VkOffset2D $offset = null,
        null|VkExtent2D $extent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRect2D', false), $vulkan);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($extent)) $self->setExtent($extent);
        return $self;
    }

    /**
     * VkOffset2D/
     */
    public function getOffset(): VkOffset2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue, $ffi);
        return $phpValue;
    }

    public function setOffset(VkOffset2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->offset = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->extent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->extent = $cValue;
    }
}
