<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkTessellationDomainOrigin: int
{
    case UpperLeft = 0;
    case LowerLeft = 1;
}
