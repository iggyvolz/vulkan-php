<?php

namespace iggyvolz\vulkan\generator\Transformer;

readonly class Array1DTransformer extends Transformer
{

    public function __construct(public string $phpType, public string $cType, public int $length)
    {
    }
    /**
     * @inheritDoc
     */
    public function phpType(): string
    {
        return "array";
    }

    public function phpDocType(): string
    {
        return "array{" . implode(",", array_map(fn(int $i) => "$i:$this->phpType", range(0, $this->length))) . "}";
    }

    /**
     * @inheritDoc
     */
    public function cTypePrefix(): string
    {
        return $this->cType;
    }

    /**
     * @inheritDoc
     */
    public function cTypeSuffix(): string
    {
        return "[$this->length]";
    }

    public function toC(): string
    {
        return implode("\n", array_map(fn(int $i): string => "\$cValue[$i] = \$phpValue[$i];", range(0, $this->length)));
    }

    public function fromC(): string
    {
        return '$phpValue = [' . implode(',', array_map(fn(int $i): string => "\$cValue[$i]", range(0, $this->length))) . '];';
    }
}