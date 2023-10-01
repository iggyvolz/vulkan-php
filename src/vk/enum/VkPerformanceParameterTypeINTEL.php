<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPerformanceParameterTypeINTEL: int
{
    case HwCountersSupported = 0;
    case StreamMarkerValidBits = 1;
}
