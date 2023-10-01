<?php

namespace iggyvolz\vulkan\util;

class OpaquePointer extends Pointer
{
    public function get(int $i = 0): mixed
    {
        throw new \LogicException("Can't dereference an opaque pointer");
    }
}