<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageLayout: int
{
    case Undefined = 0;
    case General = 1;
    case ColorAttachmentOptimal = 2;
    case DepthStencilAttachmentOptimal = 3;
    case DepthStencilReadOnlyOptimal = 4;
    case ShaderReadOnlyOptimal = 5;
    case TransferSrcOptimal = 6;
    case TransferDstOptimal = 7;
    case Preinitialized = 8;
}
