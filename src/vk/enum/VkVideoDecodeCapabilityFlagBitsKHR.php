<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoDecodeCapabilityFlagBitsKHR: int
{
    case DpbAndOutputCoincide = 0;
    case DpbAndOutputDistinct = 1;
}
