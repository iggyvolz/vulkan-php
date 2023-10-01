<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkGeometryInstanceFlagBitsKHR: int
{
    case TriangleFacingCullDisable = 0;
    case TriangleFlipFacing = 1;
    case ForceOpaque = 2;
    case ForceNoOpaque = 3;
}
