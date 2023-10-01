<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseBufferMemoryBindInfo
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
        null|int $bindCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBinds = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseBufferMemoryBindInfo', false), $vulkan->ffi);
        if(!is_null($buffer)) $self->setBuffer($buffer);
        if(!is_null($bindCount)) $self->setBindCount($bindCount);
        if(!is_null($pBinds)) $self->setPBinds($pBinds);
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
     * uint32_t/
     */
    public function getBindCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bindCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBindCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->bindCount = $cValue;
    }

    /**
     * VkSparseMemoryBind* /
     */
    public function getPBinds(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pBinds;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSparseMemoryBind', $cValue, $ffi);
        return $phpValue;
    }

    public function setPBinds(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pBinds = $cValue;
    }
}
