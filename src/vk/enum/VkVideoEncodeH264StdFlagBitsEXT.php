<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeH264StdFlagBitsEXT: int
{
    case SeparateColorPlaneFlagSet = 0;
    case QpprimeYZeroTransformBypassFlagSet = 1;
    case ScalingMatrixPresentFlagSet = 2;
    case ChromaQpIndexOffset = 3;
    case SecondChromaQpIndexOffset = 4;
    case PicInitQpMinus26 = 5;
    case WeightedPredFlagSet = 6;
    case WeightedBipredIdcExplicit = 7;
    case WeightedBipredIdcImplicit = 8;
    case Transform8x8ModeFlagSet = 9;
    case DirectSpatialMvPredFlagUnset = 10;
    case EntropyCodingModeFlagUnset = 11;
    case EntropyCodingModeFlagSet = 12;
    case Direct8x8InferenceFlagUnset = 13;
    case ConstrainedIntraPredFlagSet = 14;
    case DeblockingFilterDisabled = 15;
    case DeblockingFilterEnabled = 16;
    case DeblockingFilterPartial = 17;
    case SliceQpDelta = 19;
    case DifferentSliceQpDelta = 20;
}
