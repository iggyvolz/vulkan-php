<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPushConstantRange
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
        mixed $stageFlags = null,
        null|int $offset = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPushConstantRange', false), $vulkan->ffi);
        if(!is_null($stageFlags)) $self->setStageFlags($stageFlags);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($size)) $self->setSize($size);
        return $self;
    }

    /**
     * void* /
     */
    public function getStageFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stageFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setStageFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->stageFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }
}
