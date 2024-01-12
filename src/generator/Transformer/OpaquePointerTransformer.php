<?php

namespace iggyvolz\vulkan\generator\Transformer;

use iggyvolz\vulkan\util\OpaquePointer;
use iggyvolz\vulkan\util\Pointer;

readonly final class OpaquePointerTransformer extends Transformer
{

    public function __construct()
    {
    }

    public function phpType(): string
    {
        return Pointer::class;
    }

    public function cTypePrefix(): string
    {
        return "void*";
    }

    public function cTypeSuffix(): string
    {
        return "";
    }


    /**
     * @return string PHP code to convert $phpValue of desired type into $cValue of type CData, int, or null using FFI $ffi
     */
    public function toC(): string
    {
        return '$cValue = $phpValue->cdata;';
    }

    /**
     * @return string PHP code to convert $cValue of type CData, int, or null into $phpValue of desired type using FFI $ffi
     */
    public function fromC(): string
    {
        return '$phpValue = new \\' . OpaquePointer::class . '($cValue, $this->vulkan);';
    }
}