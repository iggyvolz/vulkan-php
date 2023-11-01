<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkResolveModeFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case SampleZero = 0;
    case Average = 1;
    case Min = 2;
    case Max = 3;
}
