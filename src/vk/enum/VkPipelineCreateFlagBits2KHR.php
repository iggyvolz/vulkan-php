<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineCreateFlagBits2KHR: int
{
    case DisableOptimization = 0;
    case AllowDerivatives = 1;
    case Derivative = 2;
}
