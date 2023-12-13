<?php

namespace iggyvolz\vulkan\util;

use FFI;
use FFI\CData;
use iggyvolz\vulkan\Vulkan;

/**
 * @template T of object
 */
final class ObjectPointer extends Pointer
{
    /**
     * @param class-string<T> $innerType
     */
    public function __construct(
        public string $innerType,
        /** @internal */
        ?CData  $cdata,
        /** @internal */
        ?FFI   $ffi,
        /** @internal - for keeping alive */
        ?CData $entry = null,
    )
    {
        parent::__construct($cdata, $ffi, $entry);
    }

    /**
     * @return T
     */
    public function get(int $i=0): object
    {
        $type = $this->innerType;
        return new $type(parent::get($i), $this->ffi);
    }

    /**
     * @return list<T>
     */
    public function getLen(int $len): array
    {
        return parent::getLen($len);
    }

    public static function null(): self
    {
        return new self("", null, null);
    }

    public static function new(Vulkan $vulkan, string $type, int $length = 1): self
    {
        $ctype = substr($type, strrpos($type, "\\")+1);
        $cdata = $vulkan->ffi->new("$ctype" . "[$length]", false);
        return new self($type, FFI::addr($cdata), $vulkan->ffi, $cdata);
    }

    /**
     * @param T $obj
     * @return self<T>
     */
    public static function of(object $obj): self
    {
        return new self(get_class($obj), FFI::addr($obj->cdata), $obj->ffi);
    }
}