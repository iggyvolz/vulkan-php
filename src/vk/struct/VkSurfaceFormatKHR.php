<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSurfaceFormatKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "format" => $this->getFormat(),
          "colorSpace" => $this->getColorSpace(),
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
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|\iggyvolz\vulkan\enum\VkColorSpaceKHR $colorSpace = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSurfaceFormatKHR', false));
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($colorSpace)) $self->setColorSpace($colorSpace);
        return $self;
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
     * VkColorSpaceKHR/
     */
    public function getColorSpace(): \iggyvolz\vulkan\enum\VkColorSpaceKHR
    {
        $cValue = $this->cdata->colorSpace;
        $phpValue = \iggyvolz\vulkan\enum\VkColorSpaceKHR::from($cValue);
        return $phpValue;
    }

    public function setColorSpace(\iggyvolz\vulkan\enum\VkColorSpaceKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->colorSpace = $cValue;
    }
}
