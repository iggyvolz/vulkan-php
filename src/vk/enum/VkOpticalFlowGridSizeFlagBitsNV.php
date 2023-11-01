<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkOpticalFlowGridSizeFlagBitsNV: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case _1x1 = 0;
    case _2x2 = 1;
    case _4x4 = 2;
    case _8x8 = 3;
}
