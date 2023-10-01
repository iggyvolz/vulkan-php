<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeH264CapabilityFlagBitsEXT: int
{
    case HrdCompliance = 0;
    case PredictionWeightTableGenerated = 1;
    case RowUnalignedSlice = 2;
    case DifferentSliceType = 3;
    case BFrameInL0List = 4;
    case BFrameInL1List = 5;
    case PerPictureTypeMinMaxQp = 6;
    case PerSliceConstantQp = 7;
    case GeneratePrefixNalu = 8;
}
