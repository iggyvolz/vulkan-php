<?php

namespace iggyvolz\vulkan\generator\Transformer;

readonly final class VoidTransformer extends Transformer
{
    public function phpType(): string
    {
        return "void";
    }

    public function cTypePrefix(): string
    {
        return "void";
    }

    public function cTypeSuffix(): string
    {
        return "";
    }

    public function toC(): string
    {
        return 'throw new \LogicException("Void transformer!");';
    }

    public function fromC(): string
    {
        return 'throw new \LogicException("Void transformer!");';
    }
}