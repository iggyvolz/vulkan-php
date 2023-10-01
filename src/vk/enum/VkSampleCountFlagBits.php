<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSampleCountFlagBits: int
{
    case _1Bit = 0;
    case _2Bit = 1;
    case _4Bit = 2;
    case _8Bit = 3;
    case _16Bit = 4;
    case _32Bit = 5;
    case _64Bit = 6;
}
