<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeH265CapabilityFlagBitsEXT: int
{
    case HrdCompliance = 0;
    case PredictionWeightTableGenerated = 1;
    case RowUnalignedSliceSegment = 2;
    case DifferentSliceSegmentType = 3;
    case BFrameInL0List = 4;
    case BFrameInL1List = 5;
    case PerPictureTypeMinMaxQp = 6;
    case PerSliceSegmentConstantQp = 7;
    case MultipleTilesPerSliceSegment = 8;
    case MultipleSliceSegmentsPerTile = 9;
}
