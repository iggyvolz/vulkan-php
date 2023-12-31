<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBuildAccelerationStructureFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case AllowUpdate = 0;
    case AllowCompaction = 1;
    case PreferFastTrace = 2;
    case PreferFastBuild = 3;
    case LowMemory = 4;
    case MotionBitNv = 5;
    case AllowOpacityMicromapUpdateExt = 6;
    case AllowDisableOpacityMicromapsExt = 7;
    case AllowOpacityMicromapDataUpdateExt = 8;
    case AllowDisplacementMicromapUpdateNv = 9;
    case AllowDataAccess = 11;
}
