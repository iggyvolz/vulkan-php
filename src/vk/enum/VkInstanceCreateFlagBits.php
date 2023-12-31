<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkInstanceCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case EnumeratePortabilityBitKhr = 0;
}
