<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVertexInputAttributeDescription implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "location" => $this->getLocation(),
          "binding" => $this->getBinding(),
          "format" => $this->getFormat(),
          "offset" => $this->getOffset(),
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
        null|int $location = null,
        null|int $binding = null,
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|int $offset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVertexInputAttributeDescription', false));
        if(!is_null($location)) $self->setLocation($location);
        if(!is_null($binding)) $self->setBinding($binding);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($offset)) $self->setOffset($offset);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getLocation(): int
    {
        $cValue = $this->cdata->location;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLocation(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->location = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBinding(): int
    {
        $cValue = $this->cdata->binding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBinding(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->binding = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * uint32_t/
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
}
