<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBufferUsageFlagBits2KHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case TransferSrc = 0;
    case TransferDst = 1;
    case UniformTexelBuffer = 2;
    case StorageTexelBuffer = 3;
    case UniformBuffer = 4;
    case StorageBuffer = 5;
    case IndexBuffer = 6;
    case VertexBuffer = 7;
    case IndirectBuffer = 8;
    case ExecutionGraphScratchBitAmdx = 25;
    case Reserved28Bit = 28;
    case Reserved29Bit = 29;
    case Reserved30Bit = 30;
    case Reserved27BitQcom = 27;
    case ConditionalRenderingBitExt = 9;
    case ShaderBindingTable = 10;
    case TransformFeedbackBufferBitExt = 11;
    case TransformFeedbackCounterBufferBitExt = 12;
    case VideoDecodeSrc = 13;
    case VideoDecodeDst = 14;
    case VideoEncodeDst = 15;
    case VideoEncodeSrc = 16;
    case ShaderDeviceAddress = 17;
    case AccelerationStructureBuildInputReadOnly = 19;
    case AccelerationStructureStorage = 20;
    case SamplerDescriptorBufferBitExt = 21;
    case ResourceDescriptorBufferBitExt = 22;
    case PushDescriptorsDescriptorBufferBitExt = 26;
    case MicromapBuildInputReadOnlyBitExt = 23;
    case MicromapStorageBitExt = 24;
}
