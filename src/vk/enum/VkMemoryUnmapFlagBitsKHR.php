<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkMemoryUnmapFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case ReserveBitExt = 0;
}
