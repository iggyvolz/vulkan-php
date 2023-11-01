<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFrameBoundaryFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case FrameEnd = 0;
}
