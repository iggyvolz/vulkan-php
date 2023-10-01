<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueryResultFlagBits: int
{
    case _64Bit = 0;
    case Wait = 1;
    case WithAvailability = 2;
    case Partial = 3;
}
