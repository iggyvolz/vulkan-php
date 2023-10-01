<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccelerationStructureCompatibilityKHR: int
{
    case Compatible = 0;
    case Incompatible = 1;
}
