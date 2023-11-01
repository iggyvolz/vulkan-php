<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkMicromapCreateFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case DeviceAddressCaptureReplay = 0;
}
