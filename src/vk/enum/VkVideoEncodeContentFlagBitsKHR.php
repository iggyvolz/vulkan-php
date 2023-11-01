<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeContentFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Camera = 0;
    case Desktop = 1;
    case Rendered = 2;
}
