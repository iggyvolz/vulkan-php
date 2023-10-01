<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCommandBufferLevel: int
{
    case Primary = 0;
    case Secondary = 1;
}
