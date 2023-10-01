<?php

namespace iggyvolz\vulkan\util;

use FFI;
use FFI\CData;

/** @template T */
abstract class Pointer
{
    public function __construct(
        /** @internal */
        public ?CData  $cdata,
        /** @internal */
        public ?FFI   $ffi,
        /** @internal - for keeping alive */
        private ?CData $entry = null,
    )
    {
    }

    public function get(int $i=0): mixed
    {
        return $this->cdata[$i];
    }

    public function getLen(int $len): array
    {
        return array_map($this->get(...), range(0, $len - 1));
    }

    public function __destruct()
    {
        // TODO
//        if(!is_null($this->entry)) FFI::free($this->entry);
    }
}