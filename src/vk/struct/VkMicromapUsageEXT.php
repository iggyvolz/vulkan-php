<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMicromapUsageEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "count" => $this->getCount(),
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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $count = null,
        null|int $subdivisionLevel = null,
        null|int $format = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMicromapUsageEXT', false));
        if(!is_null($count)) $self->setCount($count);
        if(!is_null($subdivisionLevel)) $self->setSubdivisionLevel($subdivisionLevel);
        if(!is_null($format)) $self->setFormat($format);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getCount(): int
    {
        $cValue = $this->cdata->count;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->count = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubdivisionLevel(): int
    {
        $cValue = $this->cdata->subdivisionLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubdivisionLevel(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->subdivisionLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFormat(): int
    {
        $cValue = $this->cdata->format;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFormat(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->format = $cValue;
    }
}
