<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPeerMemoryFeatureFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case CopySrc = 0;
    case CopyDst = 1;
    case GenericSrc = 2;
    case GenericDst = 3;
}
