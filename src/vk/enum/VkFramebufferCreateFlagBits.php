<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFramebufferCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Imageless = 0;
}
