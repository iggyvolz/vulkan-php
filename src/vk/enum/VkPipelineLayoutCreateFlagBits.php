<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineLayoutCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Reserved0BitAmd = 0;
    case IndependentSetsBitExt = 1;
}
