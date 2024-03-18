<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Reserved0Bit = 0;
    case Reserved1Bit = 1;
}
