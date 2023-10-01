<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineExecutableStatisticFormatKHR: int
{
    case Bool32 = 0;
    case Int64 = 1;
    case Uint64 = 2;
    case Float64 = 3;
}
