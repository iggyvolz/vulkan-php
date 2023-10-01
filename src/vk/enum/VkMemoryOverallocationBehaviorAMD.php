<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkMemoryOverallocationBehaviorAMD: int
{
    case Default = 0;
    case Allowed = 1;
    case Disallowed = 2;
}
