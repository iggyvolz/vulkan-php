<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkComponentSwizzle: int
{
    case Identity = 0;
    case Zero = 1;
    case One = 2;
    case R = 3;
    case G = 4;
    case B = 5;
    case A = 6;
}
