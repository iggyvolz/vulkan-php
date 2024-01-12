<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMicromapTriangleEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "dataOffset" => $this->getDataOffset(),
          "subdivisionLevel" => $this->getSubdivisionLevel(),
          "format" => $this->getFormat(),
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
        null|int $dataOffset = null,
        null|int $subdivisionLevel = null,
        null|int $format = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMicromapTriangleEXT', false), $vulkan);
        if(!is_null($dataOffset)) $self->setDataOffset($dataOffset);
        if(!is_null($subdivisionLevel)) $self->setSubdivisionLevel($subdivisionLevel);
        if(!is_null($format)) $self->setFormat($format);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getDataOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dataOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDataOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dataOffset = $cValue;
    }

    /**
     * uint16_t/
     */
    public function getSubdivisionLevel(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subdivisionLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubdivisionLevel(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->subdivisionLevel = $cValue;
    }

    /**
     * uint16_t/
     */
    public function getFormat(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->format;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFormat(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->format = $cValue;
    }
}
