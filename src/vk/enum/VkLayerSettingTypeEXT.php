<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkLayerSettingTypeEXT: int
{
    case Bool32 = 0;
    case Int32 = 1;
    case Int64 = 2;
    case Uint32 = 3;
    case Uint64 = 4;
    case Float32 = 5;
    case Float64 = 6;
    case String = 7;
}
