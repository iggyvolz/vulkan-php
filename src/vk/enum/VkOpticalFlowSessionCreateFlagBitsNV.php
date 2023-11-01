<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkOpticalFlowSessionCreateFlagBitsNV: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case EnableHint = 0;
    case EnableCost = 1;
    case EnableGlobalFlow = 2;
    case AllowRegions = 3;
    case BothDirections = 4;
}
