<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeCapabilityFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case PrecedingExternallyEncodedBytes = 0;
    case InsufficientBitstreamBufferRangeDetection = 1;
    case Reserved2Bit = 2;
    case Reserved3Bit = 3;
}
