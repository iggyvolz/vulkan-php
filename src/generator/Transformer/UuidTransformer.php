<?php

namespace iggyvolz\vulkan\generator\Transformer;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

readonly final class UuidTransformer extends Transformer
{
    public function phpType(): string
    {
        return UuidInterface::class;
    }

    public function cTypePrefix(): string
    {
        return "uint8_t";
    }

    public function cTypeSuffix(): string
    {
        return "[16]";
    }

    public function toC(): string
    {
        return '$cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);';
    }

    public function fromC(): string
    {
        return '$phpValue = \\' . Uuid::class . '::fromBytes(\FFI::string($cValue, 16));';
    }
}