<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPerformanceValueTypeINTEL: int
{
    case Uint32 = 0;
    case Uint64 = 1;
    case Float = 2;
    case Bool = 3;
    case String = 4;
}
