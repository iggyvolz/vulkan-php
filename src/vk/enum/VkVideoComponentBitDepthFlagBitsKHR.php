<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoComponentBitDepthFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case _8Bit = 0;
    case _10Bit = 2;
    case _12Bit = 4;
}
