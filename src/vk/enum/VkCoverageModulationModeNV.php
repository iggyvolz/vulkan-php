<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCoverageModulationModeNV: int
{
    case None = 0;
    case Rgb = 1;
    case Alpha = 2;
    case Rgba = 3;
}
