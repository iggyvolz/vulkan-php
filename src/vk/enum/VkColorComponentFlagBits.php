<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkColorComponentFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case R = 0;
    case G = 1;
    case B = 2;
    case A = 3;
}
