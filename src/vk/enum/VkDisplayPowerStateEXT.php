<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDisplayPowerStateEXT: int
{
    case Off = 0;
    case Suspend = 1;
    case On = 2;
}
