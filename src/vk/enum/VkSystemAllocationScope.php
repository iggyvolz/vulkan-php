<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSystemAllocationScope: int
{
    case Command = 0;
    case Object = 1;
    case Cache = 2;
    case Device = 3;
    case Instance = 4;
}
