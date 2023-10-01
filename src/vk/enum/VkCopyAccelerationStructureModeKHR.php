<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCopyAccelerationStructureModeKHR: int
{
    case Clone = 0;
    case Compact = 1;
    case Serialize = 2;
    case Deserialize = 3;
}
