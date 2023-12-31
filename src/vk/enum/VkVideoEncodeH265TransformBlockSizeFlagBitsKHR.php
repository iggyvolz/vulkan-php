<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeH265TransformBlockSizeFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case _4Bit = 0;
    case _8Bit = 1;
    case _16Bit = 2;
    case _32Bit = 3;
}
