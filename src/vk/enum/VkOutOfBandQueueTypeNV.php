<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkOutOfBandQueueTypeNV: int
{
    case Render = 0;
    case Present = 1;
}
