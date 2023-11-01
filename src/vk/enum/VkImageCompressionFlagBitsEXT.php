<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageCompressionFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case FixedRateDefault = 0;
    case FixedRateExplicit = 1;
    case Disabled = 2;
}
