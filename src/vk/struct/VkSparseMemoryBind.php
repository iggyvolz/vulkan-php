<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseMemoryBind
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
        null|int $resourceOffset = null,
        null|int $size = null,
        null|VkDeviceMemory $memory = null,
        null|int $memoryOffset = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseMemoryBind', false), $vulkan->ffi);
        if(!is_null($resourceOffset)) $self->setResourceOffset($resourceOffset);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($memory)) $self->setMemory($memory);
        if(!is_null($memoryOffset)) $self->setMemoryOffset($memoryOffset);
        if(!is_null($flags)) $self->setFlags($flags);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getResourceOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->resourceOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setResourceOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->resourceOffset = $cValue;
    }

    /**
     * uint64_t/
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

    /**
     * VkDeviceMemory/
     */
    public function getMemory(): VkDeviceMemory
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memory;
        $phpValue = new \iggyvolz\vulkan\struct\VkDeviceMemory($cValue, $ffi);
        return $phpValue;
    }

    public function setMemory(VkDeviceMemory $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->memory = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMemoryOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memoryOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryOffset = $cValue;
    }

    /**
     * VkSparseMemoryBindFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSparseMemoryBindFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSparseMemoryBindFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
