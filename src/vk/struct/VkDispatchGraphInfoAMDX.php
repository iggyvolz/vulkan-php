<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDispatchGraphInfoAMDX
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
        null|int $nodeIndex = null,
        null|int $payloadCount = null,
        mixed $payloads = null,
        null|int $payloadStride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDispatchGraphInfoAMDX', false), $vulkan->ffi);
        if(!is_null($nodeIndex)) $self->setNodeIndex($nodeIndex);
        if(!is_null($payloadCount)) $self->setPayloadCount($payloadCount);
        if(!is_null($payloads)) $self->setPayloads($payloads);
        if(!is_null($payloadStride)) $self->setPayloadStride($payloadStride);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getNodeIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->nodeIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNodeIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->nodeIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPayloadCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->payloadCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPayloadCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->payloadCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPayloads(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->payloads;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPayloads(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->payloads = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPayloadStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->payloadStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPayloadStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->payloadStride = $cValue;
    }
}
