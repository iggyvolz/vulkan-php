<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkExternalSemaphoreFeatureFlagBits: int
{
    case Exportable = 0;
    case Importable = 1;
}
