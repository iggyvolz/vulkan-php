<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueryType: int
{
    case Occlusion = 0;
    case PipelineStatistics = 1;
    case Timestamp = 2;
    case ResultStatusOnlyKhr = 1000023000;
    case TransformFeedbackStreamExt = 1000028004;
    case PerformanceQueryKhr = 1000116000;
    case AccelerationStructureCompactedSizeKhr = 1000150000;
    case AccelerationStructureSerializationSizeKhr = 1000150001;
    case AccelerationStructureCompactedSizeNv = 1000165000;
    case PerformanceQueryIntel = 1000210000;
    case VideoEncodeFeedbackKhr = 1000299000;
    case MeshPrimitivesGeneratedExt = 1000328000;
    case PrimitivesGeneratedExt = 1000382000;
    case AccelerationStructureSerializationBottomLevelPointersKhr = 1000386000;
    case AccelerationStructureSizeKhr = 1000386001;
    case MicromapSerializationSizeExt = 1000396000;
    case MicromapCompactedSizeExt = 1000396001;
}
