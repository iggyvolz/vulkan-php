<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkOpticalFlowUsageFlagBitsNV: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Input = 0;
    case Output = 1;
    case Hint = 2;
    case Cost = 3;
    case GlobalFlow = 4;
}
