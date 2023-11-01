<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeRateControlModeFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Disabled = 0;
    case Cbr = 1;
    case Vbr = 2;
}
