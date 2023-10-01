<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkLayeredDriverUnderlyingApiMSFT: int
{
    case None = 0;
    case D3d12 = 1;
}
