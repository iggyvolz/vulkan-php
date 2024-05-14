<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseBufferMemoryBindInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "buffer" => $this->getBuffer(),
          "bindCount" => $this->getBindCount(),
          "pBinds" => $this->getPBinds(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \FFI $ffi,
        null|VkBuffer $buffer = null,
        null|int $bindCount = null,
        null|VkSparseMemoryBind $pBinds = null,
    ): self {
        $self = new self( $ffi->new('VkSparseBufferMemoryBindInfo', false));
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
        $cValue = $this->cdata->buffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setBuffer(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->buffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBindCount(): int
    {
        $cValue = $this->cdata->bindCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBindCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bindCount = $cValue;
    }

    /**
     * VkSparseMemoryBind* /
     */
    public function getPBinds(): VkSparseMemoryBind
    {
        $cValue = $this->cdata->pBinds;
        $phpValue = new \iggyvolz\vulkan\struct\VkSparseMemoryBind($cValue);
        return $phpValue;
    }

    public function setPBinds(VkSparseMemoryBind $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pBinds = $cValue;
    }
}
