<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeFeedbackFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case BitstreamBufferOffset = 0;
    case BitstreamBytesWritten = 1;
    case BitstreamHasOverrides = 2;
}
