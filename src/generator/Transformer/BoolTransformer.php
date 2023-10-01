<?php

namespace iggyvolz\vulkan\generator\Transformer;

final readonly class BoolTransformer extends Transformer
{
    public function phpType(): string
    {
        return "bool";
    }

    public function cTypePrefix(): string
    {
        return "uint32_t";
    }

    public function cTypeSuffix(): string
    {
        return "";
    }

    public function toC(): string
    {
        return '$cValue = $phpValue ? 1 : 0;';
    }

    public function fromC(): string
    {
        return '$phpValue = ($cValue === 1);';
    }
}