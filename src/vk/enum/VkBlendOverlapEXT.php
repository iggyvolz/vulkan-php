<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBlendOverlapEXT: int
{
    case Uncorrelated = 0;
    case Disjoint = 1;
    case Conjoint = 2;
}
