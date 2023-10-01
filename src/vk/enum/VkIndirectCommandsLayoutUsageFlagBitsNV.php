<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkIndirectCommandsLayoutUsageFlagBitsNV: int
{
    case ExplicitPreprocess = 0;
    case IndexedSequences = 1;
    case UnorderedSequences = 2;
}
