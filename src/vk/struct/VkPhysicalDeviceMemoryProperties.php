<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMemoryProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "memoryTypeCount" => $this->getMemoryTypeCount(),
          "memoryTypes" => $this->getMemoryTypes(),
          "memoryHeapCount" => $this->getMemoryHeapCount(),
          "memoryHeaps" => $this->getMemoryHeaps(),
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
        null|int $memoryTypeCount = null,
        mixed $memoryTypes = null,
        null|int $memoryHeapCount = null,
        mixed $memoryHeaps = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMemoryProperties', false), $vulkan);
        if(!is_null($memoryTypeCount)) $self->setMemoryTypeCount($memoryTypeCount);
        if(!is_null($memoryTypes)) $self->setMemoryTypes($memoryTypes);
        if(!is_null($memoryHeapCount)) $self->setMemoryHeapCount($memoryHeapCount);
        if(!is_null($memoryHeaps)) $self->setMemoryHeaps($memoryHeaps);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getMemoryTypeCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->memoryTypeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryTypeCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryTypeCount = $cValue;
    }

    /**
     * void* /
     */
    public function getMemoryTypes(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->memoryTypes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMemoryTypes(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->memoryTypes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMemoryHeapCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->memoryHeapCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryHeapCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryHeapCount = $cValue;
    }

    /**
     * void* /
     */
    public function getMemoryHeaps(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->memoryHeaps;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMemoryHeaps(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->memoryHeaps = $cValue;
    }
}
