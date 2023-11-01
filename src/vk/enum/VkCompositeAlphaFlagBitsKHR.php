<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCompositeAlphaFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Opaque = 0;
    case PreMultiplied = 1;
    case PostMultiplied = 2;
    case Inherit = 3;
}
