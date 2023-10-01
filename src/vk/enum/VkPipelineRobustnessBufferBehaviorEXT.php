<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineRobustnessBufferBehaviorEXT: int
{
    case DeviceDefault = 0;
    case Disabled = 1;
    case RobustBufferAccess = 2;
    case RobustBufferAccess2 = 3;
}
