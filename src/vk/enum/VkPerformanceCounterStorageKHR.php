<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPerformanceCounterStorageKHR: int
{
    case Int32 = 0;
    case Int64 = 1;
    case Uint32 = 2;
    case Uint64 = 3;
    case Float32 = 4;
    case Float64 = 5;
}
