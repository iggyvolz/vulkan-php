<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDepthBiasRepresentationEXT: int
{
    case LeastRepresentableValueFormat = 0;
    case LeastRepresentableValueForceUnorm = 1;
    case Float = 2;
}
