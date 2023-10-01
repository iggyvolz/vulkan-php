<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkViewportCoordinateSwizzleNV: int
{
    case PositiveX = 0;
    case NegativeX = 1;
    case PositiveY = 2;
    case NegativeY = 3;
    case PositiveZ = 4;
    case NegativeZ = 5;
    case PositiveW = 6;
    case NegativeW = 7;
}
