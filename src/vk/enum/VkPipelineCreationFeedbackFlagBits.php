<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineCreationFeedbackFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Valid = 0;
    case ApplicationPipelineCacheHit = 1;
    case BasePipelineAcceleration = 2;
}
