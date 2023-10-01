<?php

namespace iggyvolz\vulkan\generator\Transformer;

readonly final class StructTransformer extends Transformer
{

    public function __construct(public string $type)
    {
    }

    public function phpType(): string
    {
        return "\\iggyvolz\\vulkan\\struct\\$this->type";
    }

    public function cTypePrefix(): string
    {
        return $this->type;
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
        return '$phpValue = new ' . $this->phpType() . '($cValue, $ffi);';
    }
}