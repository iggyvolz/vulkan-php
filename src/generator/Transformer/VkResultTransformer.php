<?php

namespace iggyvolz\vulkan\generator\Transformer;

use iggyvolz\vulkan\enum\VkResult;

readonly final class VkResultTransformer extends Transformer
{

    public function phpType(): string
    {
        return VkResult::class;
    }

    public function cTypePrefix(): string
    {
        return "VkResult";
    }

    public function cTypeSuffix(): string
    {
        return "";
    }

    public function toC(): string
    {
        return '$cValue = $phpValue->value;';
    }

    public function fromC(): string
    {
        return '$phpValue = \\'.VkResult::class.'::from($cValue);';

    }
}