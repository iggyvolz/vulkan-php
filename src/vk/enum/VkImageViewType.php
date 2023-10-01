<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageViewType: int
{
    case _1d = 0;
    case _2d = 1;
    case _3d = 2;
    case Cube = 3;
    case _1dArray = 4;
    case _2dArray = 5;
    case CubeArray = 6;
}
