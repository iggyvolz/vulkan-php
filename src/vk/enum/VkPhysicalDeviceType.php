<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPhysicalDeviceType: int
{
    case Other = 0;
    case IntegratedGpu = 1;
    case DiscreteGpu = 2;
    case VirtualGpu = 3;
    case Cpu = 4;
}
