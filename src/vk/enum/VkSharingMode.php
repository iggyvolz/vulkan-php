<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSharingMode: int
{
    case Exclusive = 0;
    case Concurrent = 1;
}
