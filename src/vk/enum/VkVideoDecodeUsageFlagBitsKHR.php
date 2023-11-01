<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoDecodeUsageFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Transcoding = 0;
    case Offline = 1;
    case Streaming = 2;
}
