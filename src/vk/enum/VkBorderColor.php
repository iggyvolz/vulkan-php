<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBorderColor: int
{
    case FloatTransparentBlack = 0;
    case IntTransparentBlack = 1;
    case FloatOpaqueBlack = 2;
    case IntOpaqueBlack = 3;
    case FloatOpaqueWhite = 4;
    case IntOpaqueWhite = 5;
}
