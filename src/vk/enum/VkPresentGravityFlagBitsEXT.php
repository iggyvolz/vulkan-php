<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPresentGravityFlagBitsEXT: int
{
    case Min = 0;
    case Max = 1;
    case Centered = 2;
}
