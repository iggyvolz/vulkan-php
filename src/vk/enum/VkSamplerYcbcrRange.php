<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSamplerYcbcrRange: int
{
    case ItuFull = 0;
    case ItuNarrow = 1;
}
