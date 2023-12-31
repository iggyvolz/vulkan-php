<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShaderStageFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Vertex = 0;
    case TessellationControl = 1;
    case TessellationEvaluation = 2;
    case Geometry = 3;
    case Fragment = 4;
    case Compute = 5;
    case RaygenBitKhr = 8;
    case AnyHitBitKhr = 9;
    case ClosestHitBitKhr = 10;
    case MissBitKhr = 11;
    case IntersectionBitKhr = 12;
    case CallableBitKhr = 13;
    case TaskBitExt = 6;
    case MeshBitExt = 7;
    case SubpassShadingBitHuawei = 14;
    case ClusterCullingBitHuawei = 19;
}
