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
}
