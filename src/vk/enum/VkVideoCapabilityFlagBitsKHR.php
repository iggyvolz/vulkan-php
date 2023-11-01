<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoCapabilityFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case ProtectedContent = 0;
    case SeparateReferenceImages = 1;
}
