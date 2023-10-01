<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMicromapUsageEXT
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
        null|int $count = null,
        null|int $subdivisionLevel = null,
        null|int $format = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMicromapUsageEXT', false), $vulkan->ffi);
        if(!is_null($count)) $self->setCount($count);
        if(!is_null($subdivisionLevel)) $self->setSubdivisionLevel($subdivisionLevel);
        if(!is_null($format)) $self->setFormat($format);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->count;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->count = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubdivisionLevel(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subdivisionLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubdivisionLevel(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->subdivisionLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFormat(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->format;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFormat(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->format = $cValue;
    }
}
