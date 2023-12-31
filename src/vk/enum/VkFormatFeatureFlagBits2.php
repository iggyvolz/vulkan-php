<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFormatFeatureFlagBits2: int
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
    case SampledImageFilterCubic = 13;
    case TransferSrc = 14;
    case TransferDst = 15;
    case SampledImageFilterMinmax = 16;
    case MidpointChromaSamples = 17;
    case SampledImageYcbcrConversionLinearFilter = 18;
    case SampledImageYcbcrConversionSeparateReconstructionFilter = 19;
    case SampledImageYcbcrConversionChromaReconstructionExplicit = 20;
    case SampledImageYcbcrConversionChromaReconstructionExplicitForceable = 21;
    case Disjoint = 22;
    case CositedChromaSamples = 23;
    case StorageReadWithoutFormat = 31;
    case StorageWriteWithoutFormat = 32;
    case SampledImageDepthComparison = 33;
    case VideoDecodeOutputBitKhr = 25;
    case VideoDecodeDpbBitKhr = 26;
    case AccelerationStructureVertexBufferBitKhr = 29;
    case FragmentDensityMapBitExt = 24;
    case FragmentShadingRateAttachmentBitKhr = 30;
    case Reserved44BitExt = 44;
    case Reserved45BitExt = 45;
    case HostImageTransferBitExt = 46;
    case VideoEncodeInputBitKhr = 27;
    case VideoEncodeDpbBitKhr = 28;
    case LinearColorAttachmentBitNv = 38;
    case WeightImageBitQcom = 34;
    case WeightSampledImageBitQcom = 35;
    case BlockMatchingBitQcom = 36;
    case BoxFilterSampledBitQcom = 37;
    case Reserved47BitArm = 47;
    case Reserved39BitExt = 39;
    case OpticalFlowImageBitNv = 40;
    case OpticalFlowVectorBitNv = 41;
    case OpticalFlowCostBitNv = 42;
    case Reserved48BitExt = 48;
}
