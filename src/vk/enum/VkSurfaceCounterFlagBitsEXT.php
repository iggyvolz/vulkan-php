<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSurfaceCounterFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Vblank = 0;
}
