<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFormatFeatureFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case SampledImage = 0;
    case StorageImage = 1;
    case StorageImageAtomic = 2;
    case UniformTexelBuffer = 3;
    case StorageTexelBuffer = 4;
    case StorageTexelBufferAtomic = 5;
    case VertexBuffer = 6;
    case ColorAttachment = 7;
    case ColorAttachmentBlend = 8;
    case DepthStencilAttachment = 9;
    case BlitSrc = 10;
    case BlitDst = 11;
    case SampledImageFilterLinear = 12;
    case TransferSrc = 14;
    case TransferDst = 15;
    case MidpointChromaSamples = 17;
    case SampledImageYcbcrConversionLinearFilter = 18;
    case SampledImageYcbcrConversionSeparateReconstructionFilter = 19;
    case SampledImageYcbcrConversionChromaReconstructionExplicit = 20;
    case SampledImageYcbcrConversionChromaReconstructionExplicitForceable = 21;
    case Disjoint = 22;
    case CositedChromaSamples = 23;
    case SampledImageFilterMinmax = 16;
    case VideoDecodeOutputBitKhr = 25;
    case VideoDecodeDpbBitKhr = 26;
    case AccelerationStructureVertexBufferBitKhr = 29;
    case SampledImageFilterCubicBitExt = 13;
    case FragmentDensityMapBitExt = 24;
    case FragmentShadingRateAttachmentBitKhr = 30;
    case VideoEncodeInputBitKhr = 27;
    case VideoEncodeDpbBitKhr = 28;
}
