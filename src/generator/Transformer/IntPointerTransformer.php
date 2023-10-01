<?php

namespace iggyvolz\vulkan\generator\Transformer;

use iggyvolz\vulkan\util\IntPointer;

readonly final class IntPointerTransformer extends Transformer
{

    public function __construct(public string $ctype)
    {
    }

    public function phpType(): string
    {
        return IntPointer::class;
    }

    public function cTypePrefix(): string
    {
        return $this->ctype . "*";
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
        return '$phpValue = $cValue->get();';
    }
}