<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCommandBufferUsageFlagBits: int
{
    case OneTimeSubmit = 0;
    case RenderPassContinue = 1;
    case SimultaneousUse = 2;
}
