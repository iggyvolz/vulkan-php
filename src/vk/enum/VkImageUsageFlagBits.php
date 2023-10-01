<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageUsageFlagBits: int
{
    case TransferSrc = 0;
    case TransferDst = 1;
    case Sampled = 2;
    case Storage = 3;
    case ColorAttachment = 4;
    case DepthStencilAttachment = 5;
    case TransientAttachment = 6;
    case InputAttachment = 7;
}
