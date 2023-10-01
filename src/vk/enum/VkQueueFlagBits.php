<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueueFlagBits: int
{
    case Graphics = 0;
    case Compute = 1;
    case Transfer = 2;
    case SparseBinding = 3;
}
