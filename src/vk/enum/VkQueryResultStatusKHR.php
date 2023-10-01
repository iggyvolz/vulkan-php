<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueryResultStatusKHR: int
{
    case Error = -1;
    case NotReady = 0;
    case Complete = 1;
}
