<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPointClippingBehavior: int
{
    case AllClipPlanes = 0;
    case UserClipPlanesOnly = 1;
}
