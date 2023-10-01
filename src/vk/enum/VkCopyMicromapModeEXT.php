<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCopyMicromapModeEXT: int
{
    case Clone = 0;
    case Serialize = 1;
    case Deserialize = 2;
    case Compact = 3;
}
