<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSurfaceTransformFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Identity = 0;
    case Rotate90Bit = 1;
    case Rotate180Bit = 2;
    case Rotate270Bit = 3;
    case HorizontalMirror = 4;
    case HorizontalMirrorRotate90Bit = 5;
    case HorizontalMirrorRotate180Bit = 6;
    case HorizontalMirrorRotate270Bit = 7;
    case Inherit = 8;
}
