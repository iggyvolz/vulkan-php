<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccessFlagBits: int
{
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
}
