<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBlendOp: int
{
    case Add = 0;
    case Subtract = 1;
    case ReverseSubtract = 2;
    case Min = 3;
    case Max = 4;
}
