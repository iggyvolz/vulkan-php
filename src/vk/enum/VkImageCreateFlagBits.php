<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case SparseBinding = 0;
    case SparseResidency = 1;
    case SparseAliased = 2;
    case MutableFormat = 3;
    case CubeCompatible = 4;
}
