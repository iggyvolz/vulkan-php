<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDirectDriverLoadingModeLUNARG: int
{
    case Exclusive = 0;
    case Inclusive = 1;
}
