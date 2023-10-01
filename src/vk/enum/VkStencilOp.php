<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkStencilOp: int
{
    case Keep = 0;
    case Zero = 1;
    case Replace = 2;
    case IncrementAndClamp = 3;
    case DecrementAndClamp = 4;
    case Invert = 5;
    case IncrementAndWrap = 6;
    case DecrementAndWrap = 7;
}
