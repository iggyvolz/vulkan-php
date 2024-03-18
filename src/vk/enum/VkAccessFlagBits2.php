<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccessFlagBits2: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case IndirectCommandRead = 0;
    case IndexRead = 1;
    case VertexAttributeRead = 2;
    case UniformRead = 3;
    case InputAttachmentRead = 4;
    case ShaderRead = 5;
    case ShaderWrite = 6;
    case ColorAttachmentRead = 7;
    case ColorAttachmentWrite = 8;
    case DepthStencilAttachmentRead = 9;
    case DepthStencilAttachmentWrite = 10;
    case TransferRead = 11;
    case TransferWrite = 12;
    case HostRead = 13;
    case HostWrite = 14;
    case MemoryRead = 15;
    case MemoryWrite = 16;
    case ShaderSampledRead = 32;
    case ShaderStorageRead = 33;
    case ShaderStorageWrite = 34;
    case VideoDecodeReadBitKhr = 35;
    case VideoDecodeWriteBitKhr = 36;
    case Reserved46BitIntel = 46;
    case VideoEncodeReadBitKhr = 37;
    case VideoEncodeWriteBitKhr = 38;
    case Reserved51BitQcom = 51;
    case Reserved52BitQcom = 52;
    case Reserved53BitQcom = 53;
    case Reserved54BitQcom = 54;
    case TransformFeedbackWriteBitExt = 25;
    case TransformFeedbackCounterReadBitExt = 26;
    case TransformFeedbackCounterWriteBitExt = 27;
    case ConditionalRenderingReadBitExt = 20;
    case CommandPreprocessReadBitNv = 17;
    case CommandPreprocessWriteBitNv = 18;
    case FragmentShadingRateAttachmentReadBitKhr = 23;
    case AccelerationStructureReadBitKhr = 21;
    case AccelerationStructureWriteBitKhr = 22;
    case FragmentDensityMapReadBitExt = 24;
    case ColorAttachmentReadNoncoherentBitExt = 19;
    case DescriptorBufferReadBitExt = 41;
    case InvocationMaskReadBitHuawei = 39;
    case ShaderBindingTableReadBitKhr = 40;
    case MicromapReadBitExt = 44;
    case MicromapWriteBitExt = 45;
    case Reserved49BitArm = 49;
    case Reserved50BitArm = 50;
    case OpticalFlowReadBitNv = 42;
    case OpticalFlowWriteBitNv = 43;
    case Reserved47BitExt = 47;
    case Reserved48BitExt = 48;
    case Reserved55BitNv = 55;
    case Reserved56BitNv = 56;
}
