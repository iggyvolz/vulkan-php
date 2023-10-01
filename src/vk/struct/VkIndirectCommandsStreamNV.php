<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkIndirectCommandsStreamNV
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
        null|VkBuffer $buffer = null,
        null|int $offset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkIndirectCommandsStreamNV', false), $vulkan->ffi);
        if(!is_null($buffer)) $self->setBuffer($buffer);
        if(!is_null($offset)) $self->setOffset($offset);
        return $self;
    }

    /**
     * VkBuffer/
     */
    public function getBuffer(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->buffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->buffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }
}
