<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSamplerAddressMode: int
{
    case Repeat = 0;
    case MirroredRepeat = 1;
    case ClampToEdge = 2;
    case ClampToBorder = 3;
    case MirrorClampToEdge = 4;
}
