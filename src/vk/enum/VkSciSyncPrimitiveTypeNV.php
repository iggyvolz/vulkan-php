<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSciSyncPrimitiveTypeNV: int
{
    case Fence = 0;
    case Semaphore = 1;
}
