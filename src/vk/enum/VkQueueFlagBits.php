<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueueFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Graphics = 0;
    case Compute = 1;
    case Transfer = 2;
    case SparseBinding = 3;
    case Protected = 4;
    case VideoDecodeBitKhr = 5;
    case Reserved9BitExt = 9;
    case VideoEncodeBitKhr = 6;
    case Reserved7BitQcom = 7;
    case Reserved11BitArm = 11;
    case OpticalFlowBitNv = 8;
    case Reserved10BitExt = 10;
}
