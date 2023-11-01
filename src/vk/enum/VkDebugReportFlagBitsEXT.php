<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDebugReportFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Information = 0;
    case Warning = 1;
    case PerformanceWarning = 2;
    case Error = 3;
    case Debug = 4;
}
