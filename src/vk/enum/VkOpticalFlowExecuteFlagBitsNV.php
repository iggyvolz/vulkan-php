<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkOpticalFlowExecuteFlagBitsNV: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case DisableTemporalHints = 0;
}
