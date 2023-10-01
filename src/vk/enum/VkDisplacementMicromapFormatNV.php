<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDisplacementMicromapFormatNV: int
{
    case _64Triangles64Bytes = 1;
    case _256Triangles128Bytes = 2;
    case _1024Triangles128Bytes = 3;
}
