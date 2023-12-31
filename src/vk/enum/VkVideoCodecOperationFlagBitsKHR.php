<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoCodecOperationFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case EncodeH264BitExt = 16;
    case EncodeH265BitExt = 17;
    case DecodeH264 = 0;
    case DecodeH265 = 1;
}
