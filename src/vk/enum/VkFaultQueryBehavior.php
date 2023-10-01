<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFaultQueryBehavior: int
{
    case GetAndClearAllFaults = 0;
}
