<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDynamicState: int
{
    case Viewport = 0;
    case Scissor = 1;
    case LineWidth = 2;
    case DepthBias = 3;
    case BlendConstants = 4;
    case DepthBounds = 5;
    case StencilCompareMask = 6;
    case StencilWriteMask = 7;
    case StencilReference = 8;
}
