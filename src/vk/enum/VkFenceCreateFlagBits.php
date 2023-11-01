<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFenceCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Signaled = 0;
}
