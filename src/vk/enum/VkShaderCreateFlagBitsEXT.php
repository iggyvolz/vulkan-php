<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShaderCreateFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case LinkStage = 0;
}
