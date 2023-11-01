<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDescriptorBindingFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case UpdateAfterBind = 0;
    case UpdateUnusedWhilePending = 1;
    case PartiallyBound = 2;
    case VariableDescriptorCount = 3;
}
