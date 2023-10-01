<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeTuningModeKHR: int
{
    case Default = 0;
    case HighQuality = 1;
    case LowLatency = 2;
    case UltraLowLatency = 3;
    case Lossless = 4;
}
