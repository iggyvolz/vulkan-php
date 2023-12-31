<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShaderCreateFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case LinkStage = 0;
    case AllowVaryingSubgroupSize = 1;
    case RequireFullSubgroups = 2;
    case NoTaskShader = 3;
    case DispatchBase = 4;
    case FragmentShadingRateAttachment = 5;
    case FragmentDensityMapAttachment = 6;
}
