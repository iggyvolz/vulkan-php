<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDisplayPlaneAlphaFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Opaque = 0;
    case Global = 1;
    case PerPixel = 2;
    case PerPixelPremultiplied = 3;
}
