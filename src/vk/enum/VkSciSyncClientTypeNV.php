<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSciSyncClientTypeNV: int
{
    case Signaler = 0;
    case Waiter = 1;
    case SignalerWaiter = 2;
}
