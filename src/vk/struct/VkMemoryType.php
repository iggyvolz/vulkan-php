<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMemoryType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "propertyFlags" => $this->getPropertyFlags(),
          "heapIndex" => $this->getHeapIndex(),
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
        null|array $propertyFlags = null,
        null|int $heapIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMemoryType', false), $vulkan);
        if(!is_null($propertyFlags)) $self->setPropertyFlags($propertyFlags);
        if(!is_null($heapIndex)) $self->setHeapIndex($heapIndex);
        return $self;
    }

    /**
     * VkMemoryPropertyFlags/
     */
    public function getPropertyFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->propertyFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkMemoryPropertyFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setPropertyFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkMemoryPropertyFlagBits::toInt(...$phpValue);
        $this->cdata->propertyFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeapIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->heapIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeapIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->heapIndex = $cValue;
    }
}
