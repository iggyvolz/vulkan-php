<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeH265RateControlFlagBitsEXT: int
{
    case AttemptHrdCompliance = 0;
    case RegularGop = 1;
    case ReferencePatternFlat = 2;
    case ReferencePatternDyadic = 3;
    case TemporalSubLayerPatternDyadic = 4;
}
