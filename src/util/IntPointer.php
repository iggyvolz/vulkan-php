<?php

namespace iggyvolz\vulkan\util;

use FFI;
use FFI\CData;
use iggyvolz\vulkan\Vulkan;

final class IntPointer extends Pointer
{
    public function get(int $i = 0): int
    {
        return parent::get($i);
    }

    /**
     * @return list<int>
     */
    public function getLen(int $len): array
    {
        return parent::getLen($len);
    }

    public static function null(): self
    {
        return new self(null, null);
    }

    public static function new(string $type, Vulkan $vulkan, int $length = 1): self
    {
        $cdata = $vulkan->ffi->new("$type" . "[$length]", false);
        return new self(FFI::addr($cdata[0]), $vulkan->ffi, $cdata);
    }
}