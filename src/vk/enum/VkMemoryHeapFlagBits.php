<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkMemoryHeapFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case DeviceLocal = 0;
}
