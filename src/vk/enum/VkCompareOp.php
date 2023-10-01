<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCompareOp: int
{
    case Never = 0;
    case Less = 1;
    case Equal = 2;
    case LessOrEqual = 3;
    case Greater = 4;
    case NotEqual = 5;
    case GreaterOrEqual = 6;
    case Always = 7;
}
