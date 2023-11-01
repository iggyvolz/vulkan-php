<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkConditionalRenderingFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Inverted = 0;
}
