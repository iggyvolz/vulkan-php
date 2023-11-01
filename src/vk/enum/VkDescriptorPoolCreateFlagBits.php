<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDescriptorPoolCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case FreeDescriptorSet = 0;
}
