<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineCreationFeedbackFlagBits: int
{
    case Valid = 0;
    case ApplicationPipelineCacheHit = 1;
    case BasePipelineAcceleration = 2;
}
