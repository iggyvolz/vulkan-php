<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSubgroupFeatureFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Basic = 0;
    case Vote = 1;
    case Arithmetic = 2;
    case Ballot = 3;
    case Shuffle = 4;
    case ShuffleRelative = 5;
    case Clustered = 6;
    case Quad = 7;
    case PartitionedBitNv = 8;
}
