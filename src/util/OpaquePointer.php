<?php

namespace iggyvolz\vulkan\util;

use FFI;
use FFI\CData;
use iggyvolz\vulkan\Vulkan;

class OpaquePointer extends Pointer
{
    public function get(int $i = 0): mixed
    {
        throw new \LogicException("Can't dereference an opaque pointer");
    }

    public static function null(Vulkan $vulkan): self
    {
        return new self($vulkan);
    }

}