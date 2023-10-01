<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineBindPoint: int
{
    case Graphics = 0;
    case Compute = 1;
}
