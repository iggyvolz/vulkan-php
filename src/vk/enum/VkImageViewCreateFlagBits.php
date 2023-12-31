<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageViewCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case FragmentDensityMapDynamicBitExt = 0;
    case DescriptorBufferCaptureReplayBitExt = 2;
    case FragmentDensityMapDeferredBitExt = 1;
}
