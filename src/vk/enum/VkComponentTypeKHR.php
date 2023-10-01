<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkComponentTypeKHR: int
{
    case Float16 = 0;
    case Float32 = 1;
    case Float64 = 2;
    case Sint8 = 3;
    case Sint16 = 4;
    case Sint32 = 5;
    case Sint64 = 6;
    case Uint8 = 7;
    case Uint16 = 8;
    case Uint32 = 9;
    case Uint64 = 10;
}
