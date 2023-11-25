<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPhysicalDeviceSchedulingControlsFlagBitsARM: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case ShaderCoreCount = 0;
}
