<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBuildAccelerationStructureModeKHR: int
{
    case Build = 0;
    case Update = 1;
}
