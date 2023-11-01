<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBuildMicromapFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case PreferFastTrace = 0;
    case PreferFastBuild = 1;
    case AllowCompaction = 2;
}
