<?php

namespace iggyvolz\vulkan\util;

use FFI;
use FFI\CData;


final readonly class FFIProxy
{
    // For when you're segfaulting and ready to throw in the towel
    private const bool DEBUG = false;
    public function __construct(private FFI $ffi)
    {
    }

    private static function print($value): string
    {
        if(is_scalar($value) || is_null($value)) return json_encode($value);
        if($value instanceof CData) {
            return "<" . FFI::typeof($value)->getName() . ":" . spl_object_id($value).">";
        }
        return "<" . get_debug_type($value) . ":".spl_object_id($value).">";
    }

    public function __get(string $name): mixed
    {
        if(self::DEBUG) echo "GET $name => " .self::print($this->ffi->$name). "\n";
        return $this->ffi->$name;
    }
    public function __set(string $name, $value): void
    {
        if(self::DEBUG) echo "SET $name " . self::print($value) ."\n";
        $this->ffi->$name = $value;
    }
    public function __call(string $name, array $arguments): mixed
    {
        if(self::DEBUG) echo "RUN $name(" . implode(", ", array_map(self::print(...), $arguments)). ") => ";
        $result = $this->ffi->$name(...$arguments);
        if(self::DEBUG) echo self::print($result). "\n";
        return $result;
    }
}