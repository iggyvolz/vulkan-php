<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkIndirectStateFlagBitsNV: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Frontface = 0;
}
