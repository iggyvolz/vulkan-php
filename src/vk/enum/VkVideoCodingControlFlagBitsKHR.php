<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoCodingControlFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Reset = 0;
    case EncodeRateControl = 1;
    case EncodeQualityLevel = 2;
}
