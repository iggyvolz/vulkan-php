<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFaultLevel: int
{
    case Unassigned = 0;
    case Critical = 1;
    case Recoverable = 2;
    case Warning = 3;
}
