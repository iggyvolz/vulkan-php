<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPerformanceCounterDescriptionFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case PerformanceImpacting = 0;
    case ConcurrentlyImpacted = 1;
}
