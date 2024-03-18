<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseMemoryBind implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "resourceOffset" => $this->getResourceOffset(),
          "size" => $this->getSize(),
          "memory" => $this->getMemory(),
          "memoryOffset" => $this->getMemoryOffset(),
          "flags" => $this->getFlags(),
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
        null|int $resourceOffset = null,
        null|int $size = null,
        null|VkDeviceMemory $memory = null,
        null|int $memoryOffset = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseMemoryBind', false));
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
        $cValue = $this->cdata->resourceOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setResourceOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->resourceOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }

    /**
     * VkDeviceMemory/
     */
    public function getMemory(): VkDeviceMemory
    {
        $cValue = $this->cdata->memory;
        $phpValue = new \iggyvolz\vulkan\struct\VkDeviceMemory($cValue, $ffi);
        return $phpValue;
    }

    public function setMemory(VkDeviceMemory $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->memory = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMemoryOffset(): int
    {
        $cValue = $this->cdata->memoryOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->memoryOffset = $cValue;
    }

    /**
     * VkSparseMemoryBindFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSparseMemoryBindFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkSparseMemoryBindFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
