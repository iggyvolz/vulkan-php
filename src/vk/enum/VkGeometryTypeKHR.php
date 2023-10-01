<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkGeometryTypeKHR: int
{
    case Triangles = 0;
    case Aabbs = 1;
    case Instances = 2;
}
