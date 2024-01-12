<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkClearRect implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "rect" => $this->getRect(),
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
        null|VkRect2D $rect = null,
        null|int $baseArrayLayer = null,
        null|int $layerCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkClearRect', false), $vulkan);
        if(!is_null($rect)) $self->setRect($rect);
        if(!is_null($baseArrayLayer)) $self->setBaseArrayLayer($baseArrayLayer);
        if(!is_null($layerCount)) $self->setLayerCount($layerCount);
        return $self;
    }

    /**
     * VkRect2D/
     */
    public function getRect(): VkRect2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->rect;
        $phpValue = new \iggyvolz\vulkan\struct\VkRect2D($cValue, $ffi);
        return $phpValue;
    }

    public function setRect(VkRect2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->rect = $cValue;
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
