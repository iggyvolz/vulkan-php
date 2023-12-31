<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkIndirectCommandsLayoutUsageFlagBitsNV: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case ExplicitPreprocess = 0;
    case IndexedSequences = 1;
    case UnorderedSequences = 2;
}
