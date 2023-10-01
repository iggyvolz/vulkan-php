<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccelerationStructureTypeKHR: int
{
    case TopLevel = 0;
    case BottomLevel = 1;
    case Generic = 2;
}
