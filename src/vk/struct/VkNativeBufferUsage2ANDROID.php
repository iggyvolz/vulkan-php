<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkNativeBufferUsage2ANDROID
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
        null|int $consumer = null,
        null|int $producer = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkNativeBufferUsage2ANDROID', false), $vulkan->ffi);
        if(!is_null($consumer)) $self->setConsumer($consumer);
        if(!is_null($producer)) $self->setProducer($producer);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getConsumer(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->consumer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setConsumer(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->consumer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getProducer(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->producer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setProducer(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->producer = $cValue;
    }
}
