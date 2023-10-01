<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkExternalMemoryFeatureFlagBitsNV: int
{
    case DedicatedOnly = 0;
    case Exportable = 1;
    case Importable = 2;
}
