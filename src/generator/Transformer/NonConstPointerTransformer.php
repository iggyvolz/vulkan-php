<?php

namespace iggyvolz\vulkan\generator\Transformer;

readonly final class NonConstPointerTransformer extends Transformer
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
        return $this->type."*";
    }

    public function cTypeSuffix(): string
    {
        return "";
    }

    public function toC(): string
    {
        return "throw new \\LogicException(\"Non const pointer transformer - $this->type!\");";
    }

    public function fromC(): string
    {
        return "throw new \\LogicException(\"Non const pointer transformer - $this->type!\");";
    }
}