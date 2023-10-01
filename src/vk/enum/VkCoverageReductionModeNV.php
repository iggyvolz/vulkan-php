<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCoverageReductionModeNV: int
{
    case Merge = 0;
    case Truncate = 1;
}
