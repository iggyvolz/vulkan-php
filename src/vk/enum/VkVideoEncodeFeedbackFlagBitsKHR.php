<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeFeedbackFlagBitsKHR: int
{
    case BitstreamBufferOffset = 0;
    case BitstreamBytesWritten = 1;
    case BitstreamHasOverrides = 2;
}
