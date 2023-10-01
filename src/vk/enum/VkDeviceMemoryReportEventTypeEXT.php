<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDeviceMemoryReportEventTypeEXT: int
{
    case Allocate = 0;
    case Free = 1;
    case Import = 2;
    case Unimport = 3;
    case AllocationFailed = 4;
}
