<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeH265CtbSizeFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case _16Bit = 0;
    case _32Bit = 1;
    case _64Bit = 2;
}
