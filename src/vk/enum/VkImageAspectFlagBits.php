<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageAspectFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Color = 0;
    case Depth = 1;
    case Stencil = 2;
    case Metadata = 3;
    case Plane0Bit = 4;
    case Plane1Bit = 5;
    case Plane2Bit = 6;
    case MemoryPlane0BitExt = 7;
    case MemoryPlane1BitExt = 8;
    case MemoryPlane2BitExt = 9;
    case MemoryPlane3BitExt = 10;
}
