<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkOpacityMicromapSpecialIndexEXT: int
{
    case FullyTransparent = -1;
    case FullyOpaque = -2;
    case FullyUnknownTransparent = -3;
    case FullyUnknownOpaque = -4;
}
