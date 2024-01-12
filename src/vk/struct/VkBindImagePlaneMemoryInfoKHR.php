<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindImagePlaneMemoryInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan): self
    {
        $self = new self( $vulkan->ffi->new('VkBindImagePlaneMemoryInfoKHR', false), $vulkan);
        return $self;
    }
}
