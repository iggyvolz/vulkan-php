<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDependencyFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case ByRegion = 0;
    case DeviceGroup = 2;
    case ViewLocal = 1;
    case FeedbackLoopBitExt = 3;
}
