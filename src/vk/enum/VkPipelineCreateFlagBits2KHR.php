<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineCreateFlagBits2KHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case DisableOptimization = 0;
    case AllowDerivatives = 1;
    case Derivative = 2;
    case Reserved33Bit = 33;
    case ViewIndexFromDeviceIndex = 3;
    case DispatchBase = 4;
    case DeferCompileBitNv = 5;
    case CaptureStatistics = 6;
    case CaptureInternalRepresentations = 7;
    case FailOnPipelineCompileRequired = 8;
    case EarlyReturnOnFailure = 9;
    case LinkTimeOptimizationBitExt = 10;
    case RetainLinkTimeOptimizationInfoBitExt = 23;
    case Library = 11;
    case RayTracingSkipTriangles = 12;
    case RayTracingSkipAabbs = 13;
    case RayTracingNoNullAnyHitShaders = 14;
    case RayTracingNoNullClosestHitShaders = 15;
    case RayTracingNoNullMissShaders = 16;
    case RayTracingNoNullIntersectionShaders = 17;
    case RayTracingShaderGroupHandleCaptureReplay = 19;
    case IndirectBindableBitNv = 18;
    case RayTracingAllowMotionBitNv = 20;
    case RenderingFragmentShadingRateAttachment = 21;
    case RenderingFragmentDensityMapAttachmentBitExt = 22;
    case RayTracingOpacityMicromapBitExt = 24;
    case ColorAttachmentFeedbackLoopBitExt = 25;
    case DepthStencilAttachmentFeedbackLoopBitExt = 26;
    case NoProtectedAccessBitExt = 27;
    case ProtectedAccessOnlyBitExt = 30;
    case RayTracingDisplacementMicromapBitNv = 28;
    case DescriptorBufferBitExt = 29;
    case Reserved32Bit = 32;
    case Reserved31Bit = 31;
}
