<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSamplerReductionMode: int
{
    case WeightedAverage = 0;
    case Min = 1;
    case Max = 2;
    case WeightedAverageRangeclampQcom = 1000521000;
}
