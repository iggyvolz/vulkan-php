<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPresentScalingFlagBitsEXT: int
{
    case OneToOne = 0;
    case AspectRatioStretch = 1;
    case Stretch = 2;
}
