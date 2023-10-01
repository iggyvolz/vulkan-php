<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeUsageFlagBitsKHR: int
{
    case Transcoding = 0;
    case Streaming = 1;
    case Recording = 2;
    case Conferencing = 3;
}
