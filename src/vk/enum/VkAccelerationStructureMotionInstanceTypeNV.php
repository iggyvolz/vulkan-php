<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccelerationStructureMotionInstanceTypeNV: int
{
    case Static = 0;
    case MatrixMotion = 1;
    case SrtMotion = 2;
}
