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
        Vulkan $vulkan,
        /** @internal */
        ?CData  $cdata,
        /** @internal - for keeping alive */
        ?CData $entry = null,
    )
    {
        parent::__construct($cdata, $vulkan, $entry);
    }

    /**
     * @return T
     */
    public function get(int $i=0): object
    {
        $type = $this->innerType;
        if(is_subclass_of($type, \BackedEnum::class)) {
            return $type::from(parent::get($i));
        } else {
            return new $type(parent::get($i), $this->vulkan);
        }
    }

    /**
     * @return list<T>
     */
    public function getLen(int $len): array
    {
        return parent::getLen($len);
    }

    public static function null(Vulkan $vulkan): self
    {
        return new self("", $vulkan, null);
    }

    public static function new(Vulkan $vulkan, string $type, int $length = 1): self
    {
        $ctype = substr($type, strrpos($type, "\\")+1);
        $cdata = $vulkan->ffi->new("$ctype" . "[$length]", false);
        return new self($type, $vulkan, FFI::addr($cdata[0]), $cdata);
    }

    /**
     * @param T $obj
     * @return self<T>
     */
    public static function of(object $obj): self
    {
        return new self(get_class($obj), $obj->vulkan, FFI::addr($obj->cdata));
    }
}