<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPerformanceCounterScopeKHR: int
{
    case CommandBuffer = 0;
    case RenderPass = 1;
    case Command = 2;
}
