<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoCapabilityFlagBitsKHR: int
{
    case ProtectedContent = 0;
    case SeparateReferenceImages = 1;
}
