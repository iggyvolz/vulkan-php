<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageSubresourceRange implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "aspectMask" => $this->getAspectMask(),
          "baseMipLevel" => $this->getBaseMipLevel(),
          "levelCount" => $this->getLevelCount(),
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
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|array $aspectMask = null,
        null|int $baseMipLevel = null,
        null|int $levelCount = null,
        null|int $baseArrayLayer = null,
        null|int $layerCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageSubresourceRange', false), $vulkan);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        if(!is_null($baseMipLevel)) $self->setBaseMipLevel($baseMipLevel);
        if(!is_null($levelCount)) $self->setLevelCount($levelCount);
        if(!is_null($baseArrayLayer)) $self->setBaseArrayLayer($baseArrayLayer);
        if(!is_null($layerCount)) $self->setLayerCount($layerCount);
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
    public function getBaseMipLevel(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->baseMipLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseMipLevel(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->baseMipLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLevelCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->levelCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLevelCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->levelCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBaseArrayLayer(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->baseArrayLayer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseArrayLayer(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->baseArrayLayer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayerCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->layerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLayerCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->layerCount = $cValue;
    }
}
