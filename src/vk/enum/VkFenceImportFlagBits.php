<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFenceImportFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Temporary = 0;
}
