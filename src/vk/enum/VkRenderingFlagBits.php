<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkRenderingFlagBits: int
{
    case ContentsSecondaryCommandBuffers = 0;
    case Suspending = 1;
    case Resuming = 2;
}
