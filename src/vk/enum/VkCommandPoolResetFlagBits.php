<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCommandPoolResetFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case ReleaseResources = 0;
    case Reserved1BitCoreavi = 1;
}
