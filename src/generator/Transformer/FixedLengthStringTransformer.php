<?php

namespace iggyvolz\vulkan\generator\Transformer;

use iggyvolz\vulkan\generator\Transformer\Transformer;

readonly class FixedLengthStringTransformer extends Transformer
{
    public function __construct(private int $length)
    {
    }

    /**
     * @inheritDoc
     */
    public function phpType(): string
    {
        return "string";
    }

    /**
     * @inheritDoc
     */
    public function cTypePrefix(): string
    {
        return "char";
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
        return '\\FFI::memcpy($cValue, $phpValue, ' . $this->length . ');';
    }

    public function fromC(): string
    {
        return '$tempString = \\FFI::string($cValue, ' . $this->length . '); $phpValue = \\substr($tempString, 0, \\strpos($tempString, "\\0"));';
    }
}