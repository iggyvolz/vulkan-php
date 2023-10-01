<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccelerationStructureBuildTypeKHR: int
{
    case Host = 0;
    case Device = 1;
    case HostOrDevice = 2;
}
