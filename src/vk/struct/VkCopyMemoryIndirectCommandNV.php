<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyMemoryIndirectCommandNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "srcAddress" => $this->getSrcAddress(),
          "dstAddress" => $this->getDstAddress(),
          "size" => $this->getSize(),
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
        null|int $srcAddress = null,
        null|int $dstAddress = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyMemoryIndirectCommandNV', false));
        if(!is_null($srcAddress)) $self->setSrcAddress($srcAddress);
        if(!is_null($dstAddress)) $self->setDstAddress($dstAddress);
        if(!is_null($size)) $self->setSize($size);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getSrcAddress(): int
    {
        $cValue = $this->cdata->srcAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcAddress(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->srcAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDstAddress(): int
    {
        $cValue = $this->cdata->dstAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstAddress(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dstAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }
}
