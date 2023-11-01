<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkGeometryFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Opaque = 0;
    case NoDuplicateAnyHitInvocation = 1;
}
