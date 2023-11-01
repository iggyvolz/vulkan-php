<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSubmitFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Protected = 0;
}
