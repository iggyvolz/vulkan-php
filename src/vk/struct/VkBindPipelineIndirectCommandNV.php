<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindPipelineIndirectCommandNV
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $pipelineAddress = null): self
    {
        $self = new self( $vulkan->ffi->new('VkBindPipelineIndirectCommandNV', false), $vulkan->ffi);
        if(!is_null($pipelineAddress)) $self->setPipelineAddress($pipelineAddress);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getPipelineAddress(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineAddress(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineAddress = $cValue;
    }
}
