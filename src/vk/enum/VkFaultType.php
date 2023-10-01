<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFaultType: int
{
    case Invalid = 0;
    case Unassigned = 1;
    case Implementation = 2;
    case System = 3;
    case PhysicalDevice = 4;
    case CommandBufferFull = 5;
    case InvalidApiUsage = 6;
}
