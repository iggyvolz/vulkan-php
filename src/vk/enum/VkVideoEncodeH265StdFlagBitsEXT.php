<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeH265StdFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case SeparateColorPlaneFlagSet = 0;
    case SampleAdaptiveOffsetEnabledFlagSet = 1;
    case ScalingListDataPresentFlagSet = 2;
    case PcmEnabledFlagSet = 3;
    case SpsTemporalMvpEnabledFlagSet = 4;
    case InitQpMinus26 = 5;
    case WeightedPredFlagSet = 6;
    case WeightedBipredFlagSet = 7;
    case Log2ParallelMergeLevelMinus2 = 8;
    case SignDataHidingEnabledFlagSet = 9;
    case TransformSkipEnabledFlagSet = 10;
    case TransformSkipEnabledFlagUnset = 11;
    case PpsSliceChromaQpOffsetsPresentFlagSet = 12;
    case TransquantBypassEnabledFlagSet = 13;
    case ConstrainedIntraPredFlagSet = 14;
    case EntropyCodingSyncEnabledFlagSet = 15;
    case DeblockingFilterOverrideEnabledFlagSet = 16;
    case DependentSliceSegmentsEnabledFlagSet = 17;
    case DependentSliceSegmentFlagSet = 18;
    case SliceQpDelta = 19;
    case DifferentSliceQpDelta = 20;
}
