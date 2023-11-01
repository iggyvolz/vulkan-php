<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueryControlFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Precise = 0;
}
