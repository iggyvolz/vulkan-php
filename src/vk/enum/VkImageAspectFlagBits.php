<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageAspectFlagBits: int
{
    case Color = 0;
    case Depth = 1;
    case Stencil = 2;
    case Metadata = 3;
}
