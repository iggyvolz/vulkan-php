<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeRateControlModeFlagBitsKHR: int
{
    case Disabled = 0;
    case Cbr = 1;
    case Vbr = 2;
}
