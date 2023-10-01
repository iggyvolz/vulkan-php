<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineRobustnessImageBehaviorEXT: int
{
    case DeviceDefault = 0;
    case Disabled = 1;
    case RobustImageAccess = 2;
    case RobustImageAccess2 = 3;
}
