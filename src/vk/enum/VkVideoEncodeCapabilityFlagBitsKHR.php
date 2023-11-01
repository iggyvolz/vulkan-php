<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeCapabilityFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case PrecedingExternallyEncodedBytes = 0;
    case InsufficientBitstreamBufferRangeDetection = 1;
}
