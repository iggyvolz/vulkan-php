<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCoarseSampleOrderTypeNV: int
{
    case Default = 0;
    case Custom = 1;
    case PixelMajor = 2;
    case SampleMajor = 3;
}
