<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMemoryType
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
        mixed $propertyFlags = null,
        null|int $heapIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMemoryType', false), $vulkan->ffi);
        if(!is_null($propertyFlags)) $self->setPropertyFlags($propertyFlags);
        if(!is_null($heapIndex)) $self->setHeapIndex($heapIndex);
        return $self;
    }

    /**
     * void* /
     */
    public function getPropertyFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->propertyFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPropertyFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->propertyFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeapIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->heapIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeapIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->heapIndex = $cValue;
    }
}
