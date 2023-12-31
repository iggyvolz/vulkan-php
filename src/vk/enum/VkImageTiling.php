<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageTiling: int
{
    case Optimal = 0;
    case Linear = 1;
    case DrmFormatModifierExt = 1000158000;
}
