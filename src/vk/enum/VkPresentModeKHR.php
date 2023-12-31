<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPresentModeKHR: int
{
    case Immediate = 0;
    case Mailbox = 1;
    case Fifo = 2;
    case FifoRelaxed = 3;
    case SharedDemandRefresh = 1000111000;
    case SharedContinuousRefresh = 1000111001;
}
