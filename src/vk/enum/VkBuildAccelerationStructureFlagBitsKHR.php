<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBuildAccelerationStructureFlagBitsKHR: int
{
    case AllowUpdate = 0;
    case AllowCompaction = 1;
    case PreferFastTrace = 2;
    case PreferFastBuild = 3;
    case LowMemory = 4;
}
