<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDecompressMemoryRegionNV
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
        null|int $srcAddress = null,
        null|int $dstAddress = null,
        null|int $compressedSize = null,
        null|int $decompressedSize = null,
        mixed $decompressionMethod = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDecompressMemoryRegionNV', false), $vulkan->ffi);
        if(!is_null($srcAddress)) $self->setSrcAddress($srcAddress);
        if(!is_null($dstAddress)) $self->setDstAddress($dstAddress);
        if(!is_null($compressedSize)) $self->setCompressedSize($compressedSize);
        if(!is_null($decompressedSize)) $self->setDecompressedSize($decompressedSize);
        if(!is_null($decompressionMethod)) $self->setDecompressionMethod($decompressionMethod);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getSrcAddress(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcAddress(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->srcAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDstAddress(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstAddress(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->dstAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getCompressedSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->compressedSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCompressedSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->compressedSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDecompressedSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->decompressedSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDecompressedSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->decompressedSize = $cValue;
    }

    /**
     * void* /
     */
    public function getDecompressionMethod(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->decompressionMethod;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDecompressionMethod(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->decompressionMethod = $cValue;
    }
}
