<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineShaderStageCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case AllowVaryingSubgroupSize = 0;
    case RequireFullSubgroups = 1;
    case Reserved3BitKhr = 3;
}
