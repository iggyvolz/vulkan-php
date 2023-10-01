<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDevice
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
}
