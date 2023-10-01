<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyBufferInfo2KHR
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyBufferInfo2KHR', false), $vulkan->ffi);
        return $self;
    }
}
