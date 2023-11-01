<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDebugUtilsMessageTypeFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case General = 0;
    case Validation = 1;
    case Performance = 2;
}
