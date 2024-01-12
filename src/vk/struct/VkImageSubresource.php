<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageSubresource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "aspectMask" => $this->getAspectMask(),
          "mipLevel" => $this->getMipLevel(),
          "arrayLayer" => $this->getArrayLayer(),
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
        null|array $aspectMask = null,
        null|int $mipLevel = null,
        null|int $arrayLayer = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageSubresource', false), $vulkan);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        if(!is_null($mipLevel)) $self->setMipLevel($mipLevel);
        if(!is_null($arrayLayer)) $self->setArrayLayer($arrayLayer);
        return $self;
    }

    /**
     * VkImageAspectFlags/
     */
    public function getAspectMask(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->aspectMask;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setAspectMask(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $this->cdata->aspectMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMipLevel(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mipLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMipLevel(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->mipLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getArrayLayer(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->arrayLayer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setArrayLayer(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->arrayLayer = $cValue;
    }
}
