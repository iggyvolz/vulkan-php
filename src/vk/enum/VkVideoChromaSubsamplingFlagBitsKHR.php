<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoChromaSubsamplingFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Monochrome = 0;
    case _420Bit = 1;
    case _422Bit = 2;
    case _444Bit = 3;
}
