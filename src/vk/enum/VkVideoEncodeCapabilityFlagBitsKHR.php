<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeCapabilityFlagBitsKHR: int
{
    case PrecedingExternallyEncodedBytes = 0;
    case InsufficientBitstreamBufferRangeDetection = 1;
}
