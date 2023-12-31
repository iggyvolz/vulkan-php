<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkRenderingFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case ContentsSecondaryCommandBuffers = 0;
    case Suspending = 1;
    case Resuming = 2;
    case ContentsInlineBitExt = 4;
    case EnableLegacyDitheringBitExt = 3;
}
