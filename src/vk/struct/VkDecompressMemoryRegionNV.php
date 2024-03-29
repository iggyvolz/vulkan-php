<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDecompressMemoryRegionNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "srcAddress" => $this->getSrcAddress(),
          "dstAddress" => $this->getDstAddress(),
          "compressedSize" => $this->getCompressedSize(),
          "decompressedSize" => $this->getDecompressedSize(),
          "decompressionMethod" => $this->getDecompressionMethod(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $srcAddress = null,
        null|int $dstAddress = null,
        null|int $compressedSize = null,
        null|int $decompressedSize = null,
        null|array $decompressionMethod = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDecompressMemoryRegionNV', false), $vulkan);
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
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->srcAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDstAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dstAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getCompressedSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->compressedSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCompressedSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->compressedSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDecompressedSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->decompressedSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDecompressedSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->decompressedSize = $cValue;
    }

    /**
     * VkMemoryDecompressionMethodFlagsNV/
     */
    public function getDecompressionMethod(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->decompressionMethod;
        $phpValue = \iggyvolz\vulkan\enum\VkMemoryDecompressionMethodFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setDecompressionMethod(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkMemoryDecompressionMethodFlagBitsNV::toInt(...$phpValue);
        $this->cdata->decompressionMethod = $cValue;
    }
}
