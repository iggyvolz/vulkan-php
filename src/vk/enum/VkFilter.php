<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFilter: int
{
    case Nearest = 0;
    case Linear = 1;
}
