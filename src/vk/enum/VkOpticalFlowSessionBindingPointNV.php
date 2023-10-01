<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkOpticalFlowSessionBindingPointNV: int
{
    case Unknown = 0;
    case Input = 1;
    case Reference = 2;
    case Hint = 3;
    case FlowVector = 4;
    case BackwardFlowVector = 5;
    case Cost = 6;
    case BackwardCost = 7;
    case GlobalFlow = 8;
}
