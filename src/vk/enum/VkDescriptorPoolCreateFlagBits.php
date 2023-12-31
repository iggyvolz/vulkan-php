<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDescriptorPoolCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case FreeDescriptorSet = 0;
    case UpdateAfterBind = 1;
    case HostOnlyBitExt = 2;
    case AllowOverallocationSetsBitNv = 3;
    case AllowOverallocationPoolsBitNv = 4;
}
