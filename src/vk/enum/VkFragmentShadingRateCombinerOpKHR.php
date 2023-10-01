<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFragmentShadingRateCombinerOpKHR: int
{
    case Keep = 0;
    case Replace = 1;
    case Min = 2;
    case Max = 3;
    case Mul = 4;
}
