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
    ) {
    }

    public static function create(\FFI $ffi, null|array $propertyFlags = null, null|int $heapIndex = null): self
    {
        $self = new self( $ffi->new('VkMemoryType', false));
        if(!is_null($propertyFlags)) $self->setPropertyFlags($propertyFlags);
        if(!is_null($heapIndex)) $self->setHeapIndex($heapIndex);
        return $self;
    }

    /**
     * VkMemoryPropertyFlags/
     */
    public function getPropertyFlags(): array
    {
        $cValue = $this->cdata->propertyFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkMemoryPropertyFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setPropertyFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkMemoryPropertyFlagBits::toInt(...$phpValue);
        $this->cdata->propertyFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeapIndex(): int
    {
        $cValue = $this->cdata->heapIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeapIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->heapIndex = $cValue;
    }
}
