<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeUsageFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Transcoding = 0;
    case Streaming = 1;
    case Recording = 2;
    case Conferencing = 3;
}
