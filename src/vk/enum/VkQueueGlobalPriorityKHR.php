<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueueGlobalPriorityKHR: int
{
    case Low = 128;
    case Medium = 256;
    case High = 512;
    case Realtime = 1024;
}
