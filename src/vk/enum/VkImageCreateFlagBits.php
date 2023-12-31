<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case SparseBinding = 0;
    case SparseResidency = 1;
    case SparseAliased = 2;
    case MutableFormat = 3;
    case CubeCompatible = 4;
    case Alias = 10;
    case SplitInstanceBindRegions = 6;
    case _2dArrayCompatible = 5;
    case BlockTexelViewCompatible = 7;
    case ExtendedUsage = 8;
    case Protected = 11;
    case Disjoint = 9;
    case CornerSampledBitNv = 13;
    case SampleLocationsCompatibleDepthBitExt = 12;
    case SubsampledBitExt = 14;
    case Reserved19BitExt = 19;
    case DescriptorBufferCaptureReplayBitExt = 16;
    case MultisampledRenderToSingleSampledBitExt = 18;
    case _2dViewCompatibleBitExt = 17;
    case FragmentDensityMapOffsetBitQcom = 15;
    case VideoProfileIndependentBitKhr = 20;
}
