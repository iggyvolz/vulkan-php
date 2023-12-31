<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDeviceQueueCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Protected = 0;
    case Reserved1BitQcom = 1;
}
