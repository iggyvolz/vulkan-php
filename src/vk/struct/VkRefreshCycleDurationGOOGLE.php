<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRefreshCycleDurationGOOGLE
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $refreshDuration = null): self
    {
        $self = new self( $vulkan->ffi->new('VkRefreshCycleDurationGOOGLE', false), $vulkan->ffi);
        if(!is_null($refreshDuration)) $self->setRefreshDuration($refreshDuration);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getRefreshDuration(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->refreshDuration;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRefreshDuration(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->refreshDuration = $cValue;
    }
}
