<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccelerationStructureMemoryRequirementsTypeNV: int
{
    case Object = 0;
    case BuildScratch = 1;
    case UpdateScratch = 2;
}
