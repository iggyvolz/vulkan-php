<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShaderGroupShaderKHR: int
{
    case General = 0;
    case ClosestHit = 1;
    case AnyHit = 2;
    case Intersection = 3;
}
