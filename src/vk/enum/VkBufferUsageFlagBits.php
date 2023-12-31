<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBufferUsageFlagBits: int
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
    case ShaderDeviceAddress = 17;
    case VideoDecodeSrcBitKhr = 13;
    case VideoDecodeDstBitKhr = 14;
    case TransformFeedbackBufferBitExt = 11;
    case TransformFeedbackCounterBufferBitExt = 12;
    case ConditionalRenderingBitExt = 9;
    case ExecutionGraphScratchBitAmdx = 25;
    case Reserved28BitKhr = 28;
    case Reserved29BitKhr = 29;
    case Reserved30BitKhr = 30;
    case AccelerationStructureBuildInputReadOnlyBitKhr = 19;
    case AccelerationStructureStorageBitKhr = 20;
    case ShaderBindingTableBitKhr = 10;
    case VideoEncodeDstBitKhr = 15;
    case VideoEncodeSrcBitKhr = 16;
    case Reserved27BitQcom = 27;
    case SamplerDescriptorBufferBitExt = 21;
    case ResourceDescriptorBufferBitExt = 22;
    case PushDescriptorsDescriptorBufferBitExt = 26;
    case MicromapBuildInputReadOnlyBitExt = 23;
    case MicromapStorageBitExt = 24;
}
