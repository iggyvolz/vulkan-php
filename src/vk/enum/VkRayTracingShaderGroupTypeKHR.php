<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkRayTracingShaderGroupTypeKHR: int
{
    case General = 0;
    case TrianglesHitGroup = 1;
    case ProceduralHitGroup = 2;
}
