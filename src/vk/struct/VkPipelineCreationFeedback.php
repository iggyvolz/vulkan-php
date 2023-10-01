<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCreationFeedback
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
        mixed $flags = null,
        null|int $duration = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCreationFeedback', false), $vulkan->ffi);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($duration)) $self->setDuration($duration);
        return $self;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDuration(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->duration;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDuration(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->duration = $cValue;
    }
}
