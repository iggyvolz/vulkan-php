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
}
