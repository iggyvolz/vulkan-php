<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkRenderPassCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Reserved0BitKhr = 0;
    case TransformBitQcom = 1;
}
