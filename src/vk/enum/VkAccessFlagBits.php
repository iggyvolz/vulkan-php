<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccessFlagBits: int
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
    case TransformFeedbackWriteBitExt = 25;
    case TransformFeedbackCounterReadBitExt = 26;
    case TransformFeedbackCounterWriteBitExt = 27;
    case ConditionalRenderingReadBitExt = 20;
    case ColorAttachmentReadNoncoherentBitExt = 19;
    case AccelerationStructureReadBitKhr = 21;
    case AccelerationStructureWriteBitKhr = 22;
    case FragmentDensityMapReadBitExt = 24;
    case FragmentShadingRateAttachmentReadBitKhr = 23;
    case CommandPreprocessReadBitNv = 17;
    case CommandPreprocessWriteBitNv = 18;
}
