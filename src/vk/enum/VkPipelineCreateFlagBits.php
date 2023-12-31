<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case DisableOptimization = 0;
    case AllowDerivatives = 1;
    case Derivative = 2;
    case ViewIndexFromDeviceIndex = 3;
    case DispatchBase = 4;
    case FailOnPipelineCompileRequired = 8;
    case EarlyReturnOnFailure = 9;
    case RenderingFragmentShadingRateAttachmentBitKhr = 21;
    case RenderingFragmentDensityMapAttachmentBitExt = 22;
    case RayTracingNoNullAnyHitShadersBitKhr = 14;
    case RayTracingNoNullClosestHitShadersBitKhr = 15;
    case RayTracingNoNullMissShadersBitKhr = 16;
    case RayTracingNoNullIntersectionShadersBitKhr = 17;
    case RayTracingSkipTrianglesBitKhr = 12;
    case RayTracingSkipAabbsBitKhr = 13;
    case RayTracingShaderGroupHandleCaptureReplayBitKhr = 19;
    case DeferCompileBitNv = 5;
    case CaptureStatisticsBitKhr = 6;
    case CaptureInternalRepresentationsBitKhr = 7;
    case IndirectBindableBitNv = 18;
    case LibraryBitKhr = 11;
    case DescriptorBufferBitExt = 29;
    case RetainLinkTimeOptimizationInfoBitExt = 23;
    case LinkTimeOptimizationBitExt = 10;
    case RayTracingAllowMotionBitNv = 20;
    case ColorAttachmentFeedbackLoopBitExt = 25;
    case DepthStencilAttachmentFeedbackLoopBitExt = 26;
    case RayTracingOpacityMicromapBitExt = 24;
    case RayTracingDisplacementMicromapBitNv = 28;
    case NoProtectedAccessBitExt = 27;
    case ProtectedAccessOnlyBitExt = 30;
}
