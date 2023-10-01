<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCommandPoolCreateFlagBits: int
{
    case Transient = 0;
    case ResetCommandBuffer = 1;
}
