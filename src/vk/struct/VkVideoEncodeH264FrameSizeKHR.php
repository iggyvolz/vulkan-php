<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264FrameSizeKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "frameISize" => $this->getFrameISize(),
          "framePSize" => $this->getFramePSize(),
          "frameBSize" => $this->getFrameBSize(),
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
        null|int $frameISize = null,
        null|int $framePSize = null,
        null|int $frameBSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264FrameSizeKHR', false), $vulkan);
        if(!is_null($frameISize)) $self->setFrameISize($frameISize);
        if(!is_null($framePSize)) $self->setFramePSize($framePSize);
        if(!is_null($frameBSize)) $self->setFrameBSize($frameBSize);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getFrameISize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->frameISize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFrameISize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->frameISize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFramePSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->framePSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFramePSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->framePSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFrameBSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->frameBSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFrameBSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->frameBSize = $cValue;
    }
}
