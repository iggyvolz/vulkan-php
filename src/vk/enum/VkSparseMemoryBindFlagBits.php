<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSparseMemoryBindFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Metadata = 0;
}
