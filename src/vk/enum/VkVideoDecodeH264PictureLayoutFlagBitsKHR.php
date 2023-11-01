<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoDecodeH264PictureLayoutFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case InterlacedInterleavedLines = 0;
    case InterlacedSeparatePlanes = 1;
}
