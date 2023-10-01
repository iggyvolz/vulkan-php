<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageSubresourceRange
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
        mixed $aspectMask = null,
        null|int $baseMipLevel = null,
        null|int $levelCount = null,
        null|int $baseArrayLayer = null,
        null|int $layerCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageSubresourceRange', false), $vulkan->ffi);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        if(!is_null($baseMipLevel)) $self->setBaseMipLevel($baseMipLevel);
        if(!is_null($levelCount)) $self->setLevelCount($levelCount);
        if(!is_null($baseArrayLayer)) $self->setBaseArrayLayer($baseArrayLayer);
        if(!is_null($layerCount)) $self->setLayerCount($layerCount);
        return $self;
    }

    /**
     * void* /
     */
    public function getAspectMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->aspectMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setAspectMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->aspectMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBaseMipLevel(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->baseMipLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseMipLevel(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->baseMipLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLevelCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->levelCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLevelCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->levelCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBaseArrayLayer(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->baseArrayLayer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseArrayLayer(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->baseArrayLayer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayerCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLayerCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->layerCount = $cValue;
    }
}
