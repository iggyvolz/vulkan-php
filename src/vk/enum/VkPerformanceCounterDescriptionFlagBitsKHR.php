<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPerformanceCounterDescriptionFlagBitsKHR: int
{
    case PerformanceImpacting = 0;
    case ConcurrentlyImpacted = 1;
}
