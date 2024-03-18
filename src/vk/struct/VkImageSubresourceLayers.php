<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageSubresourceLayers implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "aspectMask" => $this->getAspectMask(),
          "mipLevel" => $this->getMipLevel(),
          "baseArrayLayer" => $this->getBaseArrayLayer(),
          "layerCount" => $this->getLayerCount(),
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
        null|array $aspectMask = null,
        null|int $mipLevel = null,
        null|int $baseArrayLayer = null,
        null|int $layerCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageSubresourceLayers', false));
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        if(!is_null($mipLevel)) $self->setMipLevel($mipLevel);
        if(!is_null($baseArrayLayer)) $self->setBaseArrayLayer($baseArrayLayer);
        if(!is_null($layerCount)) $self->setLayerCount($layerCount);
        return $self;
    }

    /**
     * VkImageAspectFlags/
     */
    public function getAspectMask(): array
    {
        $cValue = $this->cdata->aspectMask;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setAspectMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $this->cdata->aspectMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMipLevel(): int
    {
        $cValue = $this->cdata->mipLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMipLevel(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->mipLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBaseArrayLayer(): int
    {
        $cValue = $this->cdata->baseArrayLayer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseArrayLayer(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->baseArrayLayer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayerCount(): int
    {
        $cValue = $this->cdata->layerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLayerCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->layerCount = $cValue;
    }
}
