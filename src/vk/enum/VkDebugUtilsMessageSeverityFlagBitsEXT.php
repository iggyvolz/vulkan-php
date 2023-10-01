<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDebugUtilsMessageSeverityFlagBitsEXT: int
{
    case Verbose = 0;
    case Info = 4;
    case Warning = 8;
    case Error = 12;
}
