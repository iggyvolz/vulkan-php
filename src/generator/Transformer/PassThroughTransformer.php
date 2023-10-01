<?php

namespace iggyvolz\vulkan\generator\Transformer;

final readonly class PassThroughTransformer extends Transformer
{
    public function __construct(public string $phpType, public string $cTypePrefix, public string $cTypeSuffix = "")
    {
    }

    public function phpType(): string
    {
        return $this->phpType;
    }

    public function cTypePrefix(): string
    {
        return $this->cTypePrefix;
    }

    public function cTypeSuffix(): string
    {
        return $this->cTypeSuffix;
    }

    public function toC(): string
    {
        return '$cValue = $phpValue;';
    }

    public function fromC(): string
    {
        return '$phpValue = $cValue;';
    }
}