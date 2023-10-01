<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkScopeKHR: int
{
    case Device = 1;
    case Workgroup = 2;
    case Subgroup = 3;
    case QueueFamily = 5;
}
