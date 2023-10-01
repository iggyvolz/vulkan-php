<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkResolveModeFlagBits: int
{
    case SampleZero = 0;
    case Average = 1;
    case Min = 2;
    case Max = 3;
}
