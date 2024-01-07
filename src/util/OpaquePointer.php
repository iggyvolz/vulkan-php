<?php

namespace iggyvolz\vulkan\util;

use FFI;
use FFI\CData;

class OpaquePointer extends Pointer
{
    public function __construct(?CData $cdata, ?FFI $ffi = null, ?CData $entry = null)
    {
        parent::__construct($cdata, $ffi, $entry);
    }

    public function get(int $i = 0): mixed
    {
        throw new \LogicException("Can't dereference an opaque pointer");
    }

    public static function null(): self
    {
        return new self(null);
    }

}