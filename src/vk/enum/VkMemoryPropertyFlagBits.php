<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkMemoryPropertyFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case DeviceLocal = 0;
    case HostVisible = 1;
    case HostCoherent = 2;
    case HostCached = 3;
    case LazilyAllocated = 4;
}
