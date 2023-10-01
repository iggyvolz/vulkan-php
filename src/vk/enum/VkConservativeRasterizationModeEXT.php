<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkConservativeRasterizationModeEXT: int
{
    case Disabled = 0;
    case Overestimate = 1;
    case Underestimate = 2;
}
