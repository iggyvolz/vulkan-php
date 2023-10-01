<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkOpticalFlowPerformanceLevelNV: int
{
    case Unknown = 0;
    case Slow = 1;
    case Medium = 2;
    case Fast = 3;
}
