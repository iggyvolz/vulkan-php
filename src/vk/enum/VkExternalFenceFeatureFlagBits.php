<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkExternalFenceFeatureFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Exportable = 0;
    case Importable = 1;
}
