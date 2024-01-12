<?php

namespace iggyvolz\vulkan\generator\Transformer;

readonly final class FlagsTransformer extends Transformer
{
    private string $bitsClass;
    public function __construct(public string $ctype)
    {
        $this->bitsClass = "iggyvolz\\vulkan\\enum\\" . str_replace("Flags", "FlagBits", $this->ctype);
    }

    public function phpType(): string
    {
        return "array";
    }

    public function phpDocType(): string
    {
        return "list<\\$this->bitsClass>";
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
        return "\$cValue = \\$this->bitsClass::toInt(...\$phpValue);";
    }

    public function fromC(): string
    {
        return "\$phpValue = \\$this->bitsClass::fromInt(\$cValue);";
    }
}