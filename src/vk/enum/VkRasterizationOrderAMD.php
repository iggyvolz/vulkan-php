<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkRasterizationOrderAMD: int
{
    case Strict = 0;
    case Relaxed = 1;
}
