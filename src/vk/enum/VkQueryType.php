<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueryType: int
{
    case Occlusion = 0;
    case PipelineStatistics = 1;
    case Timestamp = 2;
}
