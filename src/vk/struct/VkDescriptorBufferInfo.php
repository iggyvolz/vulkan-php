<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorBufferInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "buffer" => $this->getBuffer(),
          "offset" => $this->getOffset(),
          "range" => $this->getRange(),
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
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|VkBuffer $buffer = null,
        null|int $offset = null,
        null|int $range = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorBufferInfo', false));
        if(!is_null($buffer)) $self->setBuffer($buffer);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($range)) $self->setRange($range);
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
     * uint64_t/
     */
    public function getOffset(): int
    {
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getRange(): int
    {
        $cValue = $this->cdata->range;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRange(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->range = $cValue;
    }
}
