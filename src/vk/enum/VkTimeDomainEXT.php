<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkTimeDomainEXT: int
{
    case Device = 0;
    case ClockMonotonic = 1;
    case ClockMonotonicRaw = 2;
    case QueryPerformanceCounter = 3;
}
