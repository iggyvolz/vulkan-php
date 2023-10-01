<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkLineRasterizationModeEXT: int
{
    case Default = 0;
    case Rectangular = 1;
    case Bresenham = 2;
    case RectangularSmooth = 3;
}
