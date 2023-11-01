<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCommandPoolCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Transient = 0;
    case ResetCommandBuffer = 1;
}
