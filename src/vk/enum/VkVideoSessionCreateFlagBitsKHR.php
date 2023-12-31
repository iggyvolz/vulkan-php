<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoSessionCreateFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case ProtectedContent = 0;
    case AllowEncodeParameterOptimizations = 1;
    case InlineQueries = 2;
}
