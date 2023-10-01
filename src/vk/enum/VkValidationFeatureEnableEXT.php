<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkValidationFeatureEnableEXT: int
{
    case GpuAssisted = 0;
    case GpuAssistedReserveBindingSlot = 1;
    case BestPractices = 2;
    case DebugPrintf = 3;
    case SynchronizationValidation = 4;
}
