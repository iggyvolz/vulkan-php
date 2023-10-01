<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSparseImageFormatFlagBits: int
{
    case SingleMiptail = 0;
    case AlignedMipSize = 1;
    case NonstandardBlockSize = 2;
}
