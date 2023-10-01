<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkToolPurposeFlagBits: int
{
    case Validation = 0;
    case Profiling = 1;
    case Tracing = 2;
    case AdditionalFeatures = 3;
    case ModifyingFeatures = 4;
}
