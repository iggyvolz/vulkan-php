<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSwapchainCreateFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case SplitInstanceBindRegions = 0;
    case Protected = 1;
    case MutableFormat = 2;
    case DeferredMemoryAllocationBitExt = 3;
    case Reserved4BitExt = 4;
}
