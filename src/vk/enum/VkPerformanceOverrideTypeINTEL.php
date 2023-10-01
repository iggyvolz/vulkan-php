<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPerformanceOverrideTypeINTEL: int
{
    case NullHardware = 0;
    case FlushGpuCaches = 1;
}
