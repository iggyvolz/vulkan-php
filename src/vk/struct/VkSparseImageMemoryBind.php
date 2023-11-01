<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseImageMemoryBind
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
        null|VkImageSubresource $subresource = null,
        null|VkOffset3D $offset = null,
        null|VkExtent3D $extent = null,
        null|VkDeviceMemory $memory = null,
        null|int $memoryOffset = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseImageMemoryBind', false), $vulkan->ffi);
        if(!is_null($subresource)) $self->setSubresource($subresource);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($extent)) $self->setExtent($extent);
        if(!is_null($memory)) $self->setMemory($memory);
        if(!is_null($memoryOffset)) $self->setMemoryOffset($memoryOffset);
        if(!is_null($flags)) $self->setFlags($flags);
        return $self;
    }

    /**
     * VkImageSubresource/
     */
    public function getSubresource(): VkImageSubresource
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresource($cValue, $ffi);
        return $phpValue;
    }

    public function setSubresource(VkImageSubresource $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->subresource = $cValue;
    }

    /**
     * VkOffset3D/
     */
    public function getOffset(): VkOffset3D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset3D($cValue, $ffi);
        return $phpValue;
    }

    public function setOffset(VkOffset3D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->offset = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getExtent(): VkExtent3D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->extent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setExtent(VkExtent3D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->extent = $cValue;
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
