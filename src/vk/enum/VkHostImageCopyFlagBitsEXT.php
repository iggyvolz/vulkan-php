<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkHostImageCopyFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Memcpy = 0;
}
