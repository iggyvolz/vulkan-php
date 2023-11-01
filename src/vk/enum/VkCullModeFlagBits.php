<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCullModeFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Front = 0;
    case Back = 1;
}
