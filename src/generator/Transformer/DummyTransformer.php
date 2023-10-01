<?php

namespace iggyvolz\vulkan\generator\Transformer;

readonly final class DummyTransformer extends Transformer
{
    public function phpType(): string
    {
        return "mixed";
    }

    public function cTypePrefix(): string
    {
        return "void*";
    }

    public function cTypeSuffix(): string
    {
        return "";
    }

    public function toC(): string
    {
        return 'throw new \LogicException("Dummy transformer!");';
    }

    public function fromC(): string
    {
        return 'throw new \LogicException("Dummy transformer!");';
    }
}