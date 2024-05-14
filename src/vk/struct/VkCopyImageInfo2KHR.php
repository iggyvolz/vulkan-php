<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyImageInfo2KHR implements \JsonSerializable
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
    ) {
    }

    public static function create(\FFI $ffi): self
    {
        $self = new self( $ffi->new('VkCopyImageInfo2KHR', false));
        return $self;
    }
}
