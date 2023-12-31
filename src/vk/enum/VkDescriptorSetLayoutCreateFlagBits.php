<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDescriptorSetLayoutCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case UpdateAfterBindPool = 1;
    case PushDescriptorBitKhr = 0;
    case DescriptorBufferBitExt = 4;
    case EmbeddedImmutableSamplersBitExt = 5;
    case Reserved3BitAmd = 3;
    case IndirectBindableBitNv = 7;
    case HostOnlyPoolBitExt = 2;
    case PerStageBitNv = 6;
}
