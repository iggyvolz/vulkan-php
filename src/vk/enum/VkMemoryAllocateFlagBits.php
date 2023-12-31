<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkMemoryAllocateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case DeviceMask = 0;
    case DeviceAddress = 1;
    case DeviceAddressCaptureReplay = 2;
}
