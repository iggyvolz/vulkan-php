<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSetStateFlagsIndirectCommandNV
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $data = null): self
    {
        $self = new self( $vulkan->ffi->new('VkSetStateFlagsIndirectCommandNV', false), $vulkan->ffi);
        if(!is_null($data)) $self->setData($data);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getData(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->data;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setData(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->data = $cValue;
    }
}
