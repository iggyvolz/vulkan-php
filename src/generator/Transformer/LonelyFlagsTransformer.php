<?php

namespace iggyvolz\vulkan\generator\Transformer;

readonly final class LonelyFlagsTransformer extends Transformer
{
    public function __construct(public string $ctype)
    {
    }

    public function phpType(): string
    {
        return "array";
    }

    public function phpDocType(): string
    {
        return "list<void>";
    }

    public function cTypePrefix(): string
    {
        return $this->ctype;
    }

    public function cTypeSuffix(): string
    {
        return "";
    }

    public function toC(): string
    {
        return "\$cValue = 0;";
    }

    public function fromC(): string
    {
        return "\$phpValue = [];";
    }
}